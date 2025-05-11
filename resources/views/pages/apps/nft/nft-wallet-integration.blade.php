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
                                    <li class="breadcrumb-item active" aria-current="page">Wallet Integration</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Wallet Integration</h1>
                        </div>
                        <div class="btn-list">
                            <button
                                class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 sm:gap-x-6 justify-center">
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box overflow-hidden bg-gradient-to-r from-primary to-secondary nft-wallet-card">
                                <div class="box-body text-center">
                                    <div class="font-medium mb-2 text-white opacity-70">
                                        Wallet Balance
                                    </div>
                                    <h5 class="font-bold text-white">$25,680</h5>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0 text-white opacity-70">Available
                                        Balance</p>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Wallet Transactions
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);"
                                            class="p-2 py-2 bg-light text-xs text-textmuted dark:text-textmuted/50"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Last 24 Hours <i
                                                class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last 24 Hours</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last 7 Days</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last 30 Days</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush !border-0">
                                        <li class="ti-list-group-item">
                                            <div class="flex gap-4 items-center flex-wrap">
                                                <div class="leading-none">
                                                    <span
                                                        class="avatar avatar-xl bg-primarytint1color/10 !text-primarytint1color">
                                                        <i class="ri-exchange-line text-[25px]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <div class="mb-1 flex justify-between gap-1"><span
                                                            class="font-medium">ETH Received</span><span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 ms-auto inline-block">24
                                                            mins ago</span></div>
                                                    <div class="text-[13px]">From: <span
                                                            class="text-primary font-medium">@user123</span></div>
                                                    <div class="text-[13px]">Amount: <span
                                                            class="text-success font-medium">2.1 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex gap-4 items-center flex-wrap">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xl bg-success/10 !text-success">
                                                        <i class="ri-arrow-right-line text-[25px]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <div class="mb-1 flex justify-between gap-1"><span
                                                            class="font-medium">ETH Sent</span><span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 ms-auto inline-block">16
                                                            mins ago</span></div>
                                                    <div class="text-[13px]">To: <span
                                                            class="text-primary font-medium">@recipient456</span></div>
                                                    <div class="text-[13px]">Amount: <span
                                                            class="text-danger font-medium">1.5 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex gap-4 items-center flex-wrap">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xl bg-info/10 !text-info">
                                                        <i class="ri-coin-line text-[25px]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <div class="mb-1 flex justify-between gap-1"><span
                                                            class="font-medium">NFT Purchase</span><span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 ms-auto inline-block">5
                                                            mins ago</span></div>
                                                    <div class="text-[13px]">From: <span
                                                            class="text-primary font-medium">@creator789</span></div>
                                                    <div class="text-[13px]">Price: <span class="font-medium">$350</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !border-b border-defaultborder dark:border-defaultborder/10">
                                            <div class="flex gap-4 items-center flex-wrap">
                                                <div class="leading-none">
                                                    <span
                                                        class="avatar avatar-xl bg-primarytint3color/10 !text-primarytint3color">
                                                        <i class="ri-arrow-left-line text-[25px]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <div class="mb-1 flex justify-between gap-1"><span
                                                            class="font-medium">ETH Withdrawal</span><span
                                                            class="text-xs text-textmuted dark:text-textmuted/50 ms-auto inline-block">2
                                                            hours ago</span></div>
                                                    <div class="text-[13px]">To: <span
                                                            class="text-primary font-medium">0x34F7Bc...</span></div>
                                                    <div class="text-[13px]">Amount: <span
                                                            class="text-danger font-medium">5.0 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-4 text-center">
                                        <a href="javascript:void(0);" class="text-center text-primary underline">View All
                                            Transactions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Choose Network
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <ul class="ti-list-group list-group-flush nft-list flex items-center gap-4 flex-row p-4 bg-light/50 flex-wrap !rounded-none">
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10 active hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">Etherium</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10 hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/33.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">Binance</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10  hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/32.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">Solana</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10  hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/28.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">Tezos</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10  hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/30.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">Avalanche</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg border border-defaultborder dark:border-defaultborder/10  hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/29.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto hover:!text-white">boxano</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !shadow-none !bg-white dark:!bg-bodybg !border border-defaultborder dark:border-defaultborder/10  hover:!bg-primary  hover:!text-white dark:hover:!bg-primary dark:hover:!text-white">
                                            <div class="flex items-center gap-2">
                                                <div> <span class="avatar avatar-rounded avatar-sm bg-light p-1"> <img
                                                            src="{{asset('build/assets/images/nft-images/36.png')}}" alt=""> </span> </div>
                                                <div class="text-[.875rem] font-medium my-auto  hover:!text-white">Menaro</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Connect Wallet
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 justify-center">
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10 active">
                                                <div class="box-body p-4">
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded p-2 bg-light">
                                                                <img src="{{asset('build/assets/images/nft-images/22.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">MetaMask</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body p-4">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded p-2 bg-light">
                                                                <img src="{{asset('build/assets/images/nft-images/23.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">Enjin Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body p-4">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded bg-light">
                                                                <img src="{{asset('build/assets/images/nft-images/20.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">Trust Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body p-4">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded bg-light p-2">
                                                                <img src="{{asset('build/assets/images/nft-images/24.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">Coinbase Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10 xxl:mb-0">
                                                <div class="box-body p-4">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded bg-light p-2">
                                                                <img src="{{asset('build/assets/images/nft-images/19.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">Lido</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-6 col-span-12">
                                            <div
                                                class="box nft-wallet !shadow-none border border-defaultborder dark:border-defaultborder/10 xxl:mb-0">
                                                <div class="box-body p-4">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-4">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-rounded bg-light">
                                                                <img src="{{asset('build/assets/images/nft-images/27.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-0">Huobi Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer flex justify-between gap-2">
                                    <button class="ti-btn ti-btn-soft-primary btn-wave ti-btn-lg">Import More</button>
                                    <button class="ti-btn ti-btn-primary btn-wave ti-btn-lg">Add New Wallet</button>
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