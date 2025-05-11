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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Wallet</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !m-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        BTC Wallet Address
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center flex-wrap justify-between gap-4 mb-3">
                                        <div class="flex-auto">
                                            <label for="btc-wallet-address1" class="form-label">Wallet Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control !border-s" id="btc-wallet-address1" value="afb0dc8bc84625587b85415c86ef43ed8df" placeholder="Placeholder">
                                                <button class="ti-btn ti-btn-primary !m-0">Copy</button>
                                            </div>    
                                        </div> 
                                        <div>
                                            <span class="avatar avatar-xxl border border-defaultborder dark:border-defaultborder/10">
                                                <img src="{{asset('build/assets/images/media/media-68.png')}}" class="p-1 qr-image" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6 p-2 py-3 bg-light mx-0 gap-y-2 rounded-sm">
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-success/10 !text-success">
                                                            <i class="ti ti-arrow-narrow-down text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Received</span>
                                                        <span class="block font-medium">6.2834 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">BTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-danger/10 !text-danger">
                                                            <i class="ti ti-arrow-narrow-up text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Sent</span>
                                                        <span class="block font-medium">2.7382 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">BTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-secondary/10 !text-secondary">
                                                            <i class="ti ti-wallet text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Wallet</span>
                                                        <span class="block font-medium">12.5232 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">BTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-center grid">
                                    <button class="ti-btn ti-btn-primary !m-0 btn-w-lg btn-wave waves-effect waves-light">Connect</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        ETH Wallet Address
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center flex-wrap justify-between gap-4 mb-3">
                                        <div class="flex-auto">
                                            <label for="btc-wallet-address2" class="form-label">Wallet Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control !border-s" id="btc-wallet-address2" value="afb0dc8bc84625587b85415c86ef43ed8df" placeholder="Placeholder">
                                                <button class="ti-btn ti-btn-primary !m-0">Copy</button>
                                            </div>    
                                        </div> 
                                        <div>
                                            <span class="avatar avatar-xxl border border-defaultborder dark:border-defaultborder/10">
                                                <img src="{{asset('build/assets/images/media/media-68.png')}}" class="p-1 qr-image" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6 p-2 py-3 bg-light mx-0 gap-y-2 rounded-sm">
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-success/10 !text-success">
                                                            <i class="ti ti-arrow-narrow-down text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Received</span>
                                                        <span class="block font-medium">6.2834 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">ETH</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-danger/10 !text-danger">
                                                            <i class="ti ti-arrow-narrow-up text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Sent</span>
                                                        <span class="block font-medium">2.7382 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">ETH</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-secondary/10 !text-secondary">
                                                            <i class="ti ti-wallet text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Wallet</span>
                                                        <span class="block font-medium">12.5232 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">ETH</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-center grid">
                                    <button class="ti-btn ti-btn-primary !m-0 btn-w-lg btn-wave waves-effect waves-light">Connect</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        LTC Wallet Address
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center flex-wrap justify-between gap-4 mb-3">
                                        <div class="flex-auto">
                                            <label for="btc-wallet-address3" class="form-label">Wallet Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control !border-s" id="btc-wallet-address3" value="afb0dc8bc84625587b85415c86ef43ed8df" placeholder="Placeholder">
                                                <button class="ti-btn ti-btn-primary !m-0">Copy</button>
                                            </div>    
                                        </div> 
                                        <div>
                                            <span class="avatar avatar-xxl border border-defaultborder dark:border-defaultborder/10">
                                                <img src="{{asset('build/assets/images/media/media-68.png')}}" class="p-1 qr-image" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6 p-2 py-3 bg-light mx-0 gap-y-2 rounded-sm">
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-success/10 !text-success">
                                                            <i class="ti ti-arrow-narrow-down text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Received</span>
                                                        <span class="block font-medium">6.2834 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">LTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-danger/10 !text-danger">
                                                            <i class="ti ti-arrow-narrow-up text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Sent</span>
                                                        <span class="block font-medium">2.7382 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">LTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 md:col-span-3 sm:col-span-6 col-span-12">
                                            <div>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <div class="leading-none">
                                                        <span class="avatar avatar-md bg-secondary/10 !text-secondary">
                                                            <i class="ti ti-wallet text-xl"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Wallet</span>
                                                        <span class="block font-medium">12.5232 <span class="text-xs text-textmuted dark:text-textmuted/50 font-normal">LTC</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-center grid">
                                    <button class="ti-btn ti-btn-primary !m-0 btn-w-lg btn-wave waves-effect waves-light">Connect</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        BTC WALLET
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <div class="leading-none">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">Available BTC</span>
                                                <span class="font-medium text-[15px]">0.05437 BTC</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="font-medium">$1646.94 USD</span>
                                            <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">In USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex gap-2 flex-wrap">
                                        <button class="ti-btn ti-btn-soft-primary !m-0  btn-w-lg btn-wave flex-auto">Deposit</button>
                                        <button class="ti-btn ti-btn-soft-primary1 btn-w-lg btn-wave flex-auto !m-0">Withdraw</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        ETH WALLET
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <div class="leading-none">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">Available ETH</span>
                                                <span class="font-medium text-[15px]">2.3892 ETH</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="font-medium">$4581.24 USD</span>
                                            <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">In USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex gap-2 flex-wrap">
                                        <button class="ti-btn ti-btn-soft-primary !m-0  btn-w-lg btn-wave flex-auto">Deposit</button>
                                        <button class="ti-btn ti-btn-soft-primary1 btn-w-lg btn-wave flex-auto !m-0">Withdraw</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        XRP WALLET
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <div class="leading-none">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">Available XRP</span>
                                                <span class="font-medium text-[15px]">234.943 XRP</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="font-medium">$192.29 USD</span>
                                            <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">In USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex gap-2 flex-wrap">
                                        <button class="ti-btn ti-btn-soft-primary !m-0  btn-w-lg btn-wave flex-auto">Deposit</button>
                                        <button class="ti-btn ti-btn-soft-primary1 btn-w-lg btn-wave flex-auto !m-0">Withdraw</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        LTC WALLET
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <div class="leading-none">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">Available LTC</span>
                                                <span class="font-medium text-[15px]">37.254 LTC</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="font-medium">$3519.01 USD</span>
                                            <span class="block text-textmuted dark:text-textmuted/50 text-xs font-normal">In USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex gap-2 flex-wrap">
                                        <button class="ti-btn ti-btn-soft-primary !m-0  btn-w-lg btn-wave flex-auto">Deposit</button>
                                        <button class="ti-btn ti-btn-soft-primary1 btn-w-lg btn-wave flex-auto !m-0">Withdraw</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection