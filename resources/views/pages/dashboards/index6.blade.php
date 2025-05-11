@extends('layouts.master')

@section('styles')
  

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">NFT</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">NFT</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="box nft-banner-card overflow-hidden">
                                <div class="box-body p-[2rem]">
                                    <div class="grid grid-cols-12 sm:gap-x-6 items-center mx-0">
                                        <div class="xl:col-span-7 col-span-12">
                                            <h4 class="font-semibold text-white leading-none mb-3">
                                                Your Gateway to the World of NFTs: Explore, Buy, and Sell
                                            </h4>
                                            <p class="text-white op-8 mb-6">Dive into the limitless possibilities of NFTs. Explore, invest, and showcase your unique digital assets.</p>
                                            <button class="ti-btn bg-primary text-white btn-wave me-1 waves-effect waves-light">Explore Now</button>
                                            <button class="ti-btn bg-primarytint1color text-white btn-wave waves-effect waves-light">Learn More</button>
                                        </div>
                                        <div class="xl:col-span-5 col-span-12 flex justify-end items-center">
                                            <img src="{{asset('build/assets/images/nft-images/1.jpg')}}" class="img-fluid nft-main-banner-image shadow-lg p-4 me-2" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box flex-row">
                                <div class="box-body bg-light m-2 rounded-sm">
                                    <div class="flex flex-wrap items-center gap-4 flex-xl-nowrap"> 
                                        <div> 
                                            <span class="avatar avatar-md bg-primary svg-white"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle>
                                                </svg> 
                                            </span> 
                                        </div>
                                        <div> 
                                            <p class="mb-0 ">Your Balance</p>
                                            <h5 class="font-semibold mb-0">$28,546.96<span class="text-textmuted dark:text-textmuted/50 text-xs font-normal ms-1"> Increased By <span class="text-success align-center text-[11px] ms-1 font-medium">0.14% <i class="ti ti-arrow-narrow-up text-[14px]"></i></span></span> </h5> 
                                        </div> 
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-gradient">View Transactions</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <div class="icon leading-none">
                                                    <span class="avatar avatar-md shadow-sm bg-primary/10 !text-primary border-primary/25 border-2 avatar-rounded">
                                                        <i class="ri-vidicon-line text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="mb-1">256</h5>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Assets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <div class="icon leading-none">
                                                    <span class="avatar avatar-md shadow-sm bg-primarytint1color/10 !text-primarytint1color border-primarytint1color/25 border-2 avatar-rounded">
                                                        <i class="bi bi-people text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="mb-1">1,543</h5>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <div class="icon leading-none">
                                                    <span class="avatar avatar-md shadow-sm bg-primarytint2color/10 !text-primarytint2color border-primarytint2color/25 border-2 avatar-rounded">
                                                        <i class="bi bi-heart text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="mb-1">12,345</h5>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Likes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="text-center">
                                                <div class="icon leading-none">
                                                    <span class="avatar avatar-md shadow-sm bg-primarytint3color/10 !text-primarytint3color border-primarytint3color/25 border-2 avatar-rounded">
                                                        <i class="bi bi-currency-dollar text-[17px] leading-none"></i>
                                                    </span>
                                                </div>
                                                <div class="mt-1">
                                                    <h5 class="mb-1">$2.5k</h5>
                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Bidding</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->   
                    <div class="mb-4 flex items-center justify-between">
                        <h6 class="mb-0">&#128293; Hot Bids :</h6>
                        <div>
                            <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-primary">View All</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                    <img src="{{asset('build/assets/images/nft-images/10.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Vibrant Spec Cat NFT</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Kelinnies NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @kelinnies05</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                            0.045ETH
                                        </h6>
                                    </div>
                                    <div class="grid">
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Manistics NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @manistics454</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                <img src="{{asset('build/assets/images/nft-images/9.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Majestic Alpha Wolf</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Haridar NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @haridar687</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                            0.045ETH
                                        </h6>
                                    </div>
                                    <div class="grid">
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                    <img src="{{asset('build/assets/images/nft-images/4.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Radiant Blossom NFT</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Mostee NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @mostee897</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                            0.03ETH
                                        </h6>
                                    </div>
                                    <div class="grid">
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Vibrant Tropical Fishes</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Cheston NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @cheston541</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                            0.012ETH
                                        </h6>
                                    </div>
                                    <div class="grid">
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-4 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="mb-0 text-white bg-primarytint2color nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="relative">
                                    <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                </div>
                                <div class="box-body nft-body">
                                    <p class="text-[15px] mb-2 font-semibold">Ethereal Elegance NFT</p>
                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                        <div class="leading-none">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <p class="mb-0 text-xs font-medium">Cornaote NFT </p>
                                            <p class="text-[11px] op-8 mb-0 leading-none">- @Cornaote245</p>
                                            
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="font-semibold mb-0 bid-amt align-middle flex items-center gap-2">
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
                                            0.025ETH
                                        </h6>
                                    </div>
                                    <div class="grid">
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white mb-md-0 mb-0">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Featured Creators
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn-light ti-btn ti-btn-sm !text-textmuted dark:text-textmuted/50" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush mb-0 !border-t-0 !rounded-none">
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Meesthi Si</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@meesthi05</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center gap-2">
                                                    <div class="me-2 leading-none">
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm bg-primarytint1color/10 border border-primarytint1color border-opacity-10 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="" class="p-1 !rounded-full">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primarytint3color avatar-rounded border border-primarytint1color border-opacity-10">
                                                                +2
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Oorichimaru lo</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@ooro001</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm bg-primarytint3color/10 border border-primarytint1color/10 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" alt="" class="p-1 !rounded-full">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Moniket Ms</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@moniket98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center gap-2">
                                                    <div class="me-2 leading-none">
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm bg-primarytint1color/10 border border-primarytint1color/10 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" alt="" class="p-1 !rounded-full">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primarytint1color avatar-rounded border border-primarytint1color/10">
                                                                +1
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">SakuraYM</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@sakura903</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm bg-primarytint1color/10 border border-primarytint1color/10 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/8.jpg')}}" alt="" class="p-1 !rounded-full">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Sasuke Uchiha</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@sasuke777</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center gap-2">
                                                        <div class="me-2 leading-none">
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-sm bg-primarytint1color/10 border border-primarytint1color/10 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" alt="" class="p-1 !rounded-full">
                                                                </span>
                                                                <span class="avatar avatar-sm bg-primarytint2color avatar-rounded border border-primarytint1color/10">
                                                                    +3
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                    </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex gap-2">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Tomarko Ki</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">@tomarko98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-sm bg-primarytint1color/10 border border-primarytint1color/10 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/4.jpg')}}" alt="" class="p-1 !rounded-full">
                                                            </span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-soft-primary ti-btn-sm flex-wrap"><i class="ri-add-line align-middle"></i>Follow</a>
                                                    </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between flex-wrap">
                                    <div class="box-title">
                                        Total Statistics
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="sm:flex flex-wrap justify-evenly flex-auto gap-4 p-4 border-b border-block-end-dashed bg-light dark:border-defaultborder/10">
                                        <div class="m-1 flex gap-4 justify-between items-end">
                                            <div>
                                                <div>Growth <span class="badge bg-success">0.14%</span></div>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">NFTs sold</p>
                                            </div>
                                            <h6 class="mb-0">$500K</h6>
                                        </div>
                                        <div class="m-1 flex gap-4 justify-between items-end">
                                            <div>
                                                <div>Market <span class="badge bg-success">0.14%</span></div>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">NFT marketplaces</p>
                                            </div>
                                            <h6 class="mb-0">$100k</h6>
                                        </div>
                                        <div class="m-1 flex gap-4 justify-between items-end">
                                            <div>
                                                <div>Bid <span class="badge bg-danger">0.14%</span></div>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">Highest bid</p>
                                            </div>
                                            <h6 class="mb-0">$5,000</h6>
                                        </div>
                                    </div>
                                    <div id="nft-statistics" class="p-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recent Activities
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn-light ti-btn ti-btn-sm !text-textmuted dark:text-textmuted/50" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-b border-defaultborder dark:border-defaultborder/10"><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush mb-0 !border-t-0 !rounded-none">
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/2.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Auction started For <span class="text-primary">Luminous Petal</span></p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Monisteris (@monisteris547)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">5 mins ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Bid placed on <span class="text-primary">Radium Radiance</span><span class="text-textmuted dark:text-textmuted/50"> #isther457</span></p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Isther (@isther457)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">2 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/4.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Artwork sold to <span class="text-primary">@Lanisis</span></p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Rokonis (@rokonis658)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">3 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/7.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">New Arrivals form New one <span class="text-primarytint1color">@kanith</span></p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Kanith (@kanith6589)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">3 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">New artwork uploaded <span class="text-primary">@fister124</span></p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">Simon(@simon145)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">5 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">New collection created.
                                                            </p>
                                                            <div class="flex items-center gap-2">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs align-middle">Joviskin (@joviskin124)</span>
                                                                <span class="avatar avatar-xs bg-primarytint1color/10 border border-primarytint1color/10">
                                                                    <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" alt="" class="!rounded-sm">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-textmuted dark:text-textmuted/50 text-xs mt-1 ms-1">5 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-8 xl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Collections:
                                    </div>
                                    <div class="flex">
                                        <div class="me-3">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn bg-primary text-white ti-btn-sm !m-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap nft-table ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th scope="col">Rank</th>
                                                    <th scope="col">Collection</th>
                                                    <th scope="col">Volume</th>
                                                    <th scope="col">24h %</th>
                                                    <th scope="col">Owners</th>
                                                    <th scope="col">7d %</th>
                                                    <th scope="col">Floor Price</th>
                                                    <th scope="col">Items</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td><span class="font-medium text-primary">#1</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/nft-images/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense NFT</a></p>
                                                                <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50 font-normal" title="creator_name">@irukasensei229</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.56ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>15.2%</span>
                                                    </td>
                                                    <td>99.4K</td>
                                                    <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>3.1%</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.31ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>12.4K</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td><span class="font-medium text-primary">#2</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/nft-images/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Lorem Kekkei</a></p>
                                                                <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50 font-normal" title="creator_name">@clansound209</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">1.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>3.7%</span>
                                                    </td>
                                                    <td>22.1K</td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>0.5%</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">0.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>10.1K</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <td><span class="font-medium text-primary">#3</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">NFT Uchiha</a></p>
                                                                <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50 font-normal" title="creator_name">@sasukeuhi990</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2,092ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>23.1%</span></td>
                                                    <td>55.3K</td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>9.12%</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 2,000ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>52.7K</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-medium text-primary">#4</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/nft-images/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">
                                                                    Lorem Ipsum Uch</a></p>
                                                                <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50 font-normal" title="creator_name">@kakashi092</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 36.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>5.2%</span></td>
                                                    <td>66.3K</td>
                                                    <td>
                                                        <span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>4.1%</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">30.12ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>31.4K</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex items-center flex-wrap mt-3">
                                        <div>
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="ti-pagination mb-0 flex-wrap">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item "><a class="page-link active"
                                                            href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    
                                                    <li class="page-item">
                                                        <a class="page-link !text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between !pb-0">
                                    <div class="box-title">
                                        <i class="ri-star-fill text-warning me-2"></i>Best Seller
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm !text-textmuted dark:text-textmuted/50">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush !rounded-none !border-t-0">
                                        <li class="ti-list-group-item pt-0">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/14.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Meesthi Si</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@meesthi03<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Tomarko Parizi</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@tomarko98<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/16.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Kazimo Aruke</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@kazimo900<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/17.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Oorichimaru lo</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@ooro001<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/18.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Sasuke Uchiha</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@sasuke777<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between flex-xl-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md">
                                                                <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="font-medium mb-0">Nagiro Ohinavo</p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs inline-flex">@nagiro096<span class="text-primary leading-none text-[1rem] ms-1 inline-flex"><i class="ti ti-discount-check-filled "></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="text-xs text-textmuted dark:text-textmuted/50">99.9k Bidders</span>
                                                        <p class="font-semibold mb-0 bid-amt align-middle text-[14px] flex items-center gap-2">
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
                                                            0.05ETH <span class="text-[11px] text-textmuted dark:text-textmuted/50 font-normal ms-1 inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- NFT Dashboard --> 
        @vite('resources/assets/js/nft-dashboard.js')
        

@endsection