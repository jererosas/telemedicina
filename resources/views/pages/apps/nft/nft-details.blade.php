@extends('layouts.master')

@section('styles')
  
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                    <li class="breadcrumb-item active" aria-current="page">NFT Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">NFT Details</h1>
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
                    <div class="box overflow-hidden">
                        <div class="box-body">
                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                                    <div class="swiper swiper-preview-details bg-light product-details-page">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" id="img-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/4.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/5.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="swiper swiper-view-details mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/4.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/5.jpg')}}" alt="img">
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10 mb-0">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                <div class="xl:col-span-12 col-span-12 mt-xxl-0 mt-0">
                                                    <div class="flex gap-2 items-center justify-between mb-3 flex-wrap">
                                                        <div>
                                                            <p class="text-lg font-medium mb-0">Vibrant Symphony - NFT Digital Art</p>
                                                            <span class="mb-0 font-medium text-[15px]">Digital Art NFT<div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary">
                                                                    <i class="ri-checkbox-circle-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified
                                                                    </span>
                                                                </span>
                                                            </div> </span> 
                                                        </div>
                                                        <p class="text-lg text-end ms-auto mb-0">
                                                            <i class="ri-heart-3-fill text-danger align-middle"></i>
                                                            <span class="font-medium text-textmuted dark:text-textmuted/50"><a class="text-info text-[14px]" href="javascript:void(0);">(2.4k Likes)</a></span>
                                                        </p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="text-[15px] font-medium mb-1">Description :</p>
                                                        <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                            "Vibrant Symphony" is a mesmerizing NFT artwork created by a renowned digital artist. This unique piece takes viewers on a journey through a vivid and ethereal world, where vibrant colors blend seamlessly with abstract forms. The artwork is a digital representation of the artist's imagination, combining elements of surrealism and futuristic aesthetics.
                                                        </p>
                                                    </div>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 justify-center">
                                                        <div class="xxl:col-span-12 col-span-12">
                                                            <div class="ecommerce-assurance bg-light">
                                                                <div class="flex justify-between gap-2 items-center flex-wrap">
                                                                    <div>
                                                                        <p class="text-[14px] font-medium mb-2">Highest Bid :</p>
                                                                        <div class="avatar avatar-sm avatar-rounded p-1 bg-primary/10 me-2 border border-primary/10">
                                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                        </div>
                                                                        <h4 class="mb-2 inline-block text-success">  2.9ETH</h4>
                                                                        <p class="text-textmuted dark:text-textmuted/50 mb-0 text-xs"> Highest Bid By <span class="text-primary font-medium">@abstract65</span></p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-[14px] font-medium mb-2">Blockchain :</p>
                                                                        <div class="flex gap-1 items-center">
                                                                            <div class="avatar avatar-sm avatar-rounded p-1 bg-primary/10 me-2 border border-primary/10">
                                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                                                            </div>
                                                                            <h6 class="mb-0">  Ethereum</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-[14px] font-medium mb-2">Sales Ends in :</p>
                                                                        <p class="nft-details-auction-time bg-primarytint2color px-3 py-1 text-white rounded-full mb-0 shadow-sm"><i class="ri-time-line"></i> 07hrs : 33m : 45s</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-x-6 mt-4">
                                                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 text-[15px] font-medium">Collection:</p>
                                                            <div class="flex items-center font-medium">
                                                                <span class="avatar avatar-sm avatar-rounded leading-none me-1"><img src="{{asset('build/assets/images/nft-images/2.jpg')}}" alt=""></span>
                                                                Digital Art NFT
                                                            </div>
                                                        </div>
                                                        <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 text-[15px] font-medium">Owned By:</p>
                                                            <div class="flex items-center font-medium">
                                                                <span class="avatar avatar-sm avatar-rounded leading-none me-1"><img src="{{asset('build/assets/images/faces/9.jpg')}}" alt=""></span>
                                                                Henry Milo
                                                            </div>
                                                        </div>
                                                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 text-[15px] font-medium">Published :</p>
                                                            <span class="block font-medium">24, Jul 2024 - 12:45PM</span>
                                                        </div>
                                                        <div class="xxl:col-span-4 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                            <p class="mb-2 text-[15px] font-medium">Price:
                                                                <span class="ms-3 badge bg-primarytint1color/10 text-primarytint1color">30% Off</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span class="h3">
                                                                    <span class="avatar avatar-sm avatar-rounded p-1 bg-primary/10 me-2 border border-primary/10">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.299<sup class="text-[14px]">.00</sup></span>
                                                                    <span class="mb-0 text-textmuted dark:text-textmuted/50 text-xs"><s>ETH2,599.00</s>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 mt-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="flex gap-1 mb-2 xl:mb-0">
                                                                <button class="ti-btn ti-btn-primary mb-0 btn-wave flex-auto ti-btn-lg me-1">Place a bid</button>
                                                                <button class="ti-btn ti-btn-soft-secondary mb-0 btn-wave flex-auto ti-btn-lg">Buy Now</button>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-3 col-span-12"></div>
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <div class="flex gap-2 justify-end flex-wrap">
                                                                <p class="text-xs bg-primary/10 badge text-primary rounded-full text-end mb-0">
                                                                    <i class="ri-eye-line text-primary me-2 align-middle"></i>
                                                                    <span class="font-medium"><a href="javascript:void(0);"></a>3.5k Views</span>
                                                                </p>
                                                                <p class="text-xs bg-primary/10 badge text-primary rounded-full text-end mb-0">
                                                                    <i class="ri-share-line text-primary me-2 align-middle"></i>
                                                                    <span class="font-medium"><a href="javascript:void(0);"></a>Share</span>
                                                                </p>
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
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Product Details :</div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50 ms-auto">
                                        View More
                                    </a>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive overflow-auto table-bordered-default">
                                        <table class="ti-custom-table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="font-medium">
                                                        Artist Name
                                                    </th>
                                                    <td>Henry Milo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="font-medium">
                                                        Royalty
                                                    </th>
                                                    <td>
                                                        10% royalty paid to the artist on secondary sales
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="font-medium">
                                                        Total Bids
                                                    </th>
                                                    <td>
                                                        32
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="font-medium">
                                                        Current Owner
                                                    </th>
                                                    <td>
                                                        Nikki Jones
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="font-medium">
                                                        NFT Type
                                                    </th>
                                                    <td>
                                                        Digital art work
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Key Features :
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50 ms-auto">
                                        View More
                                    </a>
                                </div>
                                <div class="box-body">
                                    <ul class="mb-0 list-none">
                                        <li class="mb-4">
                                            <span class="font-medium">NFT Title:</span> "Vibrant Symphony"
                                        </li>
                                        <li class="mb-4">
                                            <span class="font-medium">Edition:</span> Limited edition of 25
                                        </li>
                                        <li class="mb-4">
                                            <span class="font-medium">Tags:</span> #digitalart, #sunset, #mystical, #dreamscape
                                        </li>
                                        <li class="mb-4">
                                            <span class="font-medium">Creation Date:</span> July 1, 2024
                                        </li>
                                        <li class="mb-4">
                                            <span class="font-medium">Average Rating:</span> 4.8/5
                                        </li>
                                        <li class="mb-4">
                                            <span class="font-medium">Dimensions:</span> 3000x2000 pixels
                                        </li>
                                        <li class="mb-1">
                                            <span class="font-medium">Exhibition History:</span> Digital Art Expo 2024 - Gallery XYZ, New York City
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Reviews & Ratings
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm text-textmuted dark:text-textmuted/50 ms-auto">
                                        View All
                                    </a>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12">
                                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="flex items-center mb-5">
                                                <div class="me-2 leading-none">
                                                    <i class="ri-star-fill fs-26 text-warning"></i>
                                                </div>
                                                <div class="leading-none">
                                                    <p class="mb-0 font-medium">4.5 out of 5<span class="mb-0 text-textmuted dark:text-textmuted/50 text-[11px] font-normal"> Based on (2.1k) ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="swiper crypto-swiper swiper-basic">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="border border-defaultborder dark:border-defaultborder/10 rounded-md p-4">
                                                            <div class="sm:flex block items-top mb-4">
                                                                <div class="flex flex-auto">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="leading-none me-2">
                                                                        <p class="mb-1 font-medium text-[14px]">Christopher <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="text-[11px] text-textmuted dark:text-textmuted/50">
                                                                                24 Nov, 2024 - 10:54PM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill text-warning align-middle text-xs"></i>
                                                                    <span class="align-middle">4.1</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="font-medium mb-1 ps-2">Vibrant Symphony &#128525;</p>
                                                                <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50 ps-2">Vibrant Symphony is an extraordinary NFT that immerses you in a world of vivid colors and imaginative landscapes.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="flex justify-between flex-wrap items-center">
                                                                    <div>
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/13.jpg')}}" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/15.jpg')}}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary text-primary me-2">Report abuse</button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint3color/10 text-primarytint3color">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="border border-defaultborder dark:border-defaultborder/10 rounded-md p-4">
                                                            <div class="sm:flex block items-top mb-4">
                                                                <div class="flex flex-auto">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="leading-none me-2">
                                                                        <p class="mb-1 font-medium text-[14px]">Sarah Johnson <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="text-[11px] text-textmuted dark:text-textmuted/50">
                                                                                30 Apr, 2024 - 03:22PM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill text-warning align-middle text-xs"></i>
                                                                    <i class="ri-star-line text-warning align-middle text-xs"></i>
                                                                    <span class="align-middle">3.7</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="font-medium mb-1 ps-2">Enchanting Dreamscape</p>
                                                                <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50 ps-2">Enchanting Dreamscape offers a surreal journey through dream-like imagery and subtle symbolism.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="flex justify-between items-center flex-wrap">
                                                                    <div>
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/7.jpg')}}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary me-2">Report abuse</button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint3color/10 text-primarytint3color">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="border border-defaultborder dark:border-defaultborder/10 rounded-md p-4">
                                                            <div class="sm:flex block items-top mb-4">
                                                                <div class="flex flex-auto">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="leading-none me-2">
                                                                        <p class="mb-1 font-medium text-[14px]">Emily Brown <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="text-[11px] text-textmuted dark:text-textmuted/50">
                                                                                15 May, 2024 - 09:15AM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-fill text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill text-warning align-middle text-xs"></i>
                                                                    <i class="ri-star-line text-warning align-middle text-xs"></i>
                                                                    <span class="align-middle">3.8</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="font-medium mb-1 ps-2">Oceanic Serenity &#127754;</p>
                                                                <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50 ps-2">Oceanic Serenity captivates with its tranquil underwater scenes and ethereal marine life.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="flex items-center justify-between flex-wrap">
                                                                    <div>
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/6.jpg')}}" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="{{asset('build/assets/images/nft-images/3.jpg')}}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary me-2">Report abuse</button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint3color/10 text-primarytint3color">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
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
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                    <!--Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Popular NFT's :
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap border border-defaultborder dark:border-defaultborder/10">
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/16.jpg')}}" alt="">
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-1 text-[14px] font-medium similar-product-name truncate">Digital Dreamscapes</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success text-white">18.5k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1">(18,512)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 text-[1rem] font-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.299 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>3.299 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/18.jpg')}}" alt="">
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-1 text-[14px] font-medium similar-product-name truncate">Galactic Gardens</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success text-white">4.2k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1">(4,356)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 text-[1rem] font-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.899 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.799 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/10.jpg')}}" alt="">
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-1 text-[14px] font-medium similar-product-name truncate">Pixelated Paradise</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success text-white">9.1k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1">(9,153)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 text-[1rem] font-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>3.599 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>5.499 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="flex items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/11.jpg')}}" alt="">
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <p class="mb-1 text-[14px] font-medium similar-product-name truncate">Vibrant Voyages</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success text-white">15.7k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-textmuted dark:text-textmuted/50 ms-1">(15,789)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 text-[1rem] font-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>6.499 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>9.999 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="grid">
                                                        <button class="ti-btn ti-btn-soft-secondary">View All NFT's</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="flex gap-1 items-center justify-between mb-3">
                                <h6 class="font-medium mb-0">Explore More NFT's:</h6>
                                <a href="javascript:void(0);" class="ti-btn bg-primary/10 text-primary  ti-btn-sm ms-auto">
                                    View More
                                </a>
                            </div>
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
                                                <div class="flex items-start gap-2 flex-wrap">
                                                    <p class="text-[15px] mb-2 font-semibold">Abstract Digital Art</p>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-primarytint2color/10 text-primarytint2color"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="flex mb-3 items-center flex-wrap gap-2">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="mb-0 text-xs font-medium">Manistics NFT </p>
                                                        <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 leading-none">- @manistics454</p>
                                                        
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
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="box">
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
                                                        <span class="badge bg-primarytint2color/10 text-primarytint2color"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="flex mb-3 items-center flex-wrap gap-2">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="mb-0 text-xs font-medium">Manistics NFT </p>
                                                        <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 leading-none">- @manistics454</p>
                                                        
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
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="box">
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
                                                        <span class="badge bg-primarytint2color/10 text-primarytint2color"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="flex mb-3 items-center flex-wrap gap-2">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-auto">
                                                        <p class="mb-0 text-xs font-medium">CyberArt NFT </p>
                                                        <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 leading-none">- @cyberartworks154</p>
                                                        
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
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="box">
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
                                                            <span class="badge bg-primarytint2color/10 text-primarytint2color"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.9k</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-3 items-center flex-wrap gap-2">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded avatar-xs">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="mb-0 text-xs font-medium">GeoNFT NFT </p>
                                                            <p class="text-[11px] text-textmuted dark:text-textmuted/50 mb-0 leading-none">- @geonft_designs47</p>
                                                            
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
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Internal NFT-Details JS -->
        @vite('resources/assets/js/nft-details.js')
        

@endsection