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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Market Place</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Market Place</h1>
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
                                <div class="box-body">
                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                        <div>
                                            <ul class="nav nav-tabs nav-tabs-header mb-0 flex flex-wrap" role="tablist">
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link active" role="tab" data-hs-tab="#nft-all">All</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-art">Art</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-gaming">Gaming</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-domain">Domain</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-music">Music</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-realestate">Real Estate</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-sports">Sports</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-fashion">Fashion</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-avatars">Avatars</a>
                                                </li>
                                                <li class="nav-item my-2" role="presentation">
                                                    <a class="nav-link" role="tab" data-hs-tab="#nft-memes">Memes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex gap-2">
                                            <button type="button" class="ti-btn ti-btn-sm bg-secondary text-white btn-wave">Filters</button>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-sm btn-wave ti-btn-primary waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                                </ul>
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
                            <div class="tab-content">
                                <div class="tab-pane show active p-0 border-0" id="nft-all" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/2.jpg')}}" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 04hrs : 24m : 38s </p>
                                                    </div>
                                                    <div>
                                                        <div class="flex items-start gap-2">
                                                            <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0  font-medium">Manistics NFT </p>
                                                                <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @manistics454</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between items-center mb-3">
                                                            <p class="mb-0 font-medium">Current Bid :</p>
                                                            <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                    <g fill="none" fill-rule="evenodd">
                                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                        <g transform="translate(227 93)"><g>
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                    </g>
                                                                </svg>
                                                                0.015ETH
                                                            </h6>
                                                        </div>
                                                        <div class="grid">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                    
                                                    <div>
                                                        <div class="flex items-start gap-2">
                                                            <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0  font-medium">Manistics NFT </p>
                                                                <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @manistics454</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between items-center mb-3">
                                                            <p class="mb-0 font-medium">Current Bid :</p>
                                                            <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                    <g fill="none" fill-rule="evenodd">
                                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                        <g transform="translate(227 93)"><g>
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                    </g>
                                                                </svg>
                                                                0.015ETH
                                                            </h6>
                                                        </div>
                                                        <div class="grid">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/4.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                    <div>
                                                        <div class="flex items-start gap-2">
                                                            <p class="text-[15px] mb-2 font-semibold">Cyberpunk Creations</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0  font-medium">CyberArt NFT </p>
                                                                <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @cyberartworks154</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between items-center mb-3">
                                                            <p class="mb-0 font-medium">Current Bid :</p>
                                                            <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                    <g fill="none" fill-rule="evenodd">
                                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                        <g transform="translate(227 93)"><g>
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                    </g>
                                                                </svg>
                                                                0.014ETH
                                                            </h6>
                                                        </div>
                                                        <div class="grid">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">GeoNFT NFT </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @geonft_designs47</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 06hrs : 15m : 10s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">PixelPerfect  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @pixelperfectnft74</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.017ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/7.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Fantasia NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @fantasianft13</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.018ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/8.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 03hrs : 45m : 50s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Celestial Digital Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>5.1k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Celestial NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @celestial_nft55</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.055ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/9.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Prismatic Universe</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.64k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Prisma NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @prisma_universe77</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.035ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <div class="justify-end flex mb-4">
                                                <nav aria-label="Page navigation">
                                                    <ul class="ti-pagination mb-0">
                                                        <li class="page-item disabled"><a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0"
                                                                href="javascript:void(0);">Previous</a></li>
                                                        <li class="page-item"><a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0"
                                                                href="javascript:void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0"
                                                                href="javascript:void(0);">2</a></li>
                                                                <li class="page-item"><a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0"
                                                                    href="javascript:void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link !bg-white dark:!bg-bodybg px-3 py-[0.375rem] !border-e-0"
                                                                href="javascript:void(0);">Next</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-art" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/10.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Prismatic Universe</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.64k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Prisma NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @prisma_universe77</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.035ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 02hrs : 50m : 55s </p>
                                                    </div>
                                                    <div>
                                                        <div class="flex items-start gap-2">
                                                            <p class="text-[15px] mb-2 font-semibold">Celestial Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>5.1k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0  font-medium">Prisma NFT  </p>
                                                                <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @prisma_universe77</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between items-center mb-3">
                                                            <p class="mb-0 font-medium">Current Bid :</p>
                                                            <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                    <g fill="none" fill-rule="evenodd">
                                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                        <g transform="translate(227 93)"><g>
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                    </g>
                                                                </svg>
                                                                0.055ETH
                                                            </h6>
                                                        </div>
                                                        <div class="grid">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/12.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Ethereal Dreams</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.37k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Ethereal NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @ethereal_dreams</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.08ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-gaming" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/13.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">GeoNFT NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @geonft_designs47</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/14.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Celestial Digital Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>5.1k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Celestial NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @celestial_nft55</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.055ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-domain" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/15.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">Fantasia NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @fantasianft13</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.018ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-music" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/16.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">PixelPerfect NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @pixelperfectnft74</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.017ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-realestate" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/17.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">GeoNFT NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @geonft_designs47</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-sports" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/18.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">PixelPerfect NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @pixelperfectnft74</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.017ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-fashion" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">GeoNFT NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @geonft_designs47</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-avatars" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/7.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">PixelPerfect NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @pixelperfectnft74</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.017ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0 hidden" id="nft-memes" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2">
                                                                <p class="text-[15px] mb-2 font-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0  font-medium">GeoNFT NFT  </p>
                                                                    <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0">- @geonft_designs47</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between items-center mb-3">
                                                                <p class="mb-0 font-medium">Current Bid :</p>
                                                                <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                        <g fill="none" fill-rule="evenodd">
                                                                        <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                            <g transform="translate(227 93)"><g>
                                                                            <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                            <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                            <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                            <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                            <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                        </g>
                                                                    </svg>
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="grid">
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-6">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection