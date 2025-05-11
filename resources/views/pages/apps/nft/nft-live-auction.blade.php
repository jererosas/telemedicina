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
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Live Auction</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Live Auction</h1>
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
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->   
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-2 xl:col-span-4 col-span-12">
                            <div class="box products-navigation-card">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Filter
                                    </div>
                                    <button class="ti-btn ti-btn-soft-primary ti-btn-sm btn-wave">Clear All</button>
                                </div>
                                <div class="box-body p-0">
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">Creator Verification</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Verified-Creator" checked="">
                                                <label class="form-check-label !ps-0" for="Verified-Creator">
                                                    Verified
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">13</span>
                                            </div>
                                            <div class="form-check mb-0 flex flex-nowrap">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Non-Verified-Creator">
                                                <label class="form-check-label !ps-0" for="Non-Verified-Creator">
                                                    Non-Verified
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end ms-auto">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">NFT Type</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Art" checked="">
                                                <label class="form-check-label !ps-0" for="NFT-Art">
                                                    Art
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">45</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Graphic">
                                                <label class="form-check-label !ps-0" for="NFT-Graphic">
                                                    Graphic
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">30</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Music">
                                                <label class="form-check-label !ps-0" for="NFT-Music">
                                                    Music
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">15</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Fashion">
                                                <label class="form-check-label !ps-0" for="NFT-Fashion">
                                                    Fashion
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">19</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Trending">
                                                <label class="form-check-label !ps-0" for="NFT-Trending">
                                                    Trending
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">19</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Games">
                                                <label class="form-check-label !ps-0" for="NFT-Games">
                                                    Games
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">45</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">Price Range</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-Under-1ETH" checked>
                                                <label class="form-check-label !ps-0" for="Price-Under-1ETH">
                                                    Under 1 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">55</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-1-3ETH">
                                                <label class="form-check-label !ps-0" for="Price-1-3ETH">
                                                    1 - 3 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">34</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-3-5ETH">
                                                <label class="form-check-label !ps-0" for="Price-3-5ETH">
                                                    3 - 5 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">34</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-5-7ETH">
                                                <label class="form-check-label !ps-0" for="Price-5-7ETH">
                                                    5 - 7 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">12</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-7-8ETH">
                                                <label class="form-check-label !ps-0" for="Price-7-8ETH">
                                                    7 - 8 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">12</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-10-15ETH">
                                                <label class="form-check-label !ps-0" for="Price-10-15ETH">
                                                    10 - 15 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">12</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-Above-15ETH">
                                                <label class="form-check-label !ps-0" for="Price-Above-15ETH">
                                                    Above 15 ETH
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">7</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">Token Standard</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="ERC-721">
                                                <label class="form-check-label !ps-0" for="ERC-721">
                                                    ERC-721
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">50</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="ERC-1155">
                                                <label class="form-check-label !ps-0" for="ERC-1155">
                                                    ERC-1155
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">25</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">Auction Status</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-Active" checked="">
                                                <label class="form-check-label !ps-0" for="Status-Active">
                                                    Active
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">89</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-OnHold">
                                                <label class="form-check-label !ps-0" for="Status-OnHold">
                                                    On Hold
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">05</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-Ended">
                                                <label class="form-check-label !ps-0" for="Status-Ended">
                                                    Ended
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">25</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="p-4 border-b border-default-border dark:border-defaultborder/10">
                                        <div class="font-medium mb-0">Ownership Status</div>
                                        <div class="px-0 py-3 pb-1">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Owned">
                                                <label class="form-check-label !ps-0" for="Owned">
                                                    Owned
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">40</span>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Not-Owned">
                                                <label class="form-check-label !ps-0" for="Not-Owned">
                                                    Not Owned
                                                </label>
                                                <span class="badge bg-light text-defaulttextcolor float-end">60</span>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 xl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex items-center justify-between mb-4">
                                        <h6 class="font-medium mb-0">Categories</h6>
                                        <div class="flex gap-2 items-center">
                                            <a class="categories-arrow left bg-primary/10 dark:!bg-primary/10">
                                                <i class="ri-arrow-left-s-line !text-primary"></i>
                                            </a>
                                            <a class="categories-arrow right bg-primary dark:!bg-primary text-white">
                                                <i class="ri-arrow-right-s-line !text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between flex-wrap gap-2 mb-4">
                                        <div class="nft-tag nft-tag-primary active">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-earth-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">All Items</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary1">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-fire-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">New Trends</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary2">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-robot-2-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">Virtual</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary3">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-camera-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">Photography</span>
                                        </div>
                                        <div class="nft-tag nft-tag-secondary">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-palette-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">Art Work</span>
                                        </div>
                                        <div class="nft-tag nft-tag-success">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-gift-line text-lg align-middle"></i></span>
                                            <span class="nft-tag-text">Others</span>
                                        </div>                            
                                    </div>
                                    <h6 class="font-medium mb-3">Live Auction:</h6>
                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/2.jpg')}}" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 04hrs : 24m : 38s </p>
                                                    </div>
                                                    <div>
                                                        <div class="flex items-start gap-2 flex-wrap">
                                                            <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0 font-medium">Manistics NFT </p>
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
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                    
                                                    <div>
                                                        <div class="flex items-start gap-2 flex-wrap">
                                                            <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0 font-medium">Manistics NFT </p>
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
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/4.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                    <div>
                                                        <div class="flex items-start gap-2 flex-wrap">
                                                            <p class="text-[15px] mb-2 font-semibold">CyberCreations</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex mb-3 items-center flex-wrap gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <p class="mb-0 font-medium">CyberArt NFT </p>
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
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/5.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2 flex-wrap">
                                                                <p class="text-[15px] mb-2 font-semibold">Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-medium">GeoNFT NFT </p>
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
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 06hrs : 15m : 10s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2 flex-wrap">
                                                                <p class="text-[15px] mb-2 font-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-medium">PixelPerfect </p>
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
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="relative overflow-hidden rounded">
                                                            <img src="{{asset('build/assets/images/nft-images/7.jpg')}}" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-white bg-primarytint2color nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-start gap-2 flex-wrap">
                                                                <p class="text-[15px] mb-2 font-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger/10 !text-danger"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex mb-3 items-center flex-wrap gap-2">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-0 font-medium">Fantasia NFT </p>
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
                                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary md:mb-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="ti-pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item "><a class="page-link active"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a>
                                                </li>
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
                        <div class="xxl:col-span-3 lg:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-12 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header !pb-0 justify-between">
                                            <div class="box-title">
                                                Top NFT Creators
                                            </div>
                                            <div>
                                                <button class="ti-btn ti-btn-soft-primary ti-btn-sm btn-wave">View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush !border-t-0 !rounded-none">
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Emily Watson<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@emilywatson</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+21.10ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">25 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/18.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Daniel Green<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@danielgreen</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+18.75ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">20 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Sophia Cruz<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@sophiacruz</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+15.90ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">18 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Oliver Bennett<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@oliverbennett</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+14.25ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">16 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/17.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Isabella Par<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@isabella</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+12.80ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">14 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-medium">Liam Cooper<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="text-xs text-textmuted dark:text-textmuted/50">@liamcooper</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="block font-medium text-success">+10.55ETH</span>
                                                            <span class="block text-textmuted dark:text-textmuted/50 text-[11px]">12 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                                <div class="xxl:col-span-12 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header !pb-0 justify-between">
                                            <div class="box-title">
                                                Latest NFT Transactions
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);" class="p-2 text-xs text-textmuted dark:text-textmuted/50" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Today<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush !border-t-0 !rounded-none">
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><a href="javascript:void(0);" class="font-medium">Galactic Treasures</a><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">24 mins ago</span></div>
                                                            <div class="text-xs">Sold to <a class="underline" href="javascript:void(0);">Mitchell</a> for <span class="text-success font-medium text-xs">0.57ETH</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/25.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><span class="font-medium">Galactic Treasures</span><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">16 mins ago</span></div>
                                                            <div class="text-xs">Started following <span class="font-medium">Mark Zuckerberg</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/21.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><span class="font-medium">Digital Cosmos</span><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">5 mins ago</span></div>
                                                            <div class="text-xs">Showed interest in purchasing <a href="javascript:void(0);" class="text-xs text-warning font-medium">Digital Cosmos</a>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/26.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><span class="font-medium">Digital Cosmos</span><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">16 mins ago</span></div>
                                                            <div class="text-xs">Purchased from <a href="javascript:void(0);" class="underline">CyberCanvas</a> for <span class="font-medium text-xs text-pink">1.345ETH</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/21.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><a href="javascript:void(0);" class="font-medium">Cosmic Odyssey</a><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">30 mins ago</span></div>
                                                            <div class="text-xs">Listed <span class="font-medium">Cosmic Odyssey</span> for auction.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg leading-none">
                                                            <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <div class="mb-1 flex items-center gap-2 justify-between"><span class="font-medium">Galactic Treasures</span><span class="text-[10px] text-textmuted dark:text-textmuted/50 inline-block ms-auto">1 hour ago</span></div>
                                                            <div class="text-xs">Gifted to <a href="javascript:void(0);" class="underline">Alice</a> as a token of appreciation.</div>
                                                        </div>
                                                    </div>
                                                </li>                                       
                                            </ul>
                                            <div class="p-4 pt-2 text-center">
                                                <a href="javascript:void(0);" class="text-center text-primary underline">View All NFT Transactions</a>
                                            </div>
                                        </div>
                                    </div>
                                    
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
            

@endsection