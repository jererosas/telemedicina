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
                                    <li class="breadcrumb-item active" aria-current="page">Buy & Sell</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Buy & Sell</h1>
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
                                            Buy Crypto
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div>
                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                <div class="xl:col-span-6 col-span-12">
                                                    <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                                        <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                            aria-label="crypto buy select" placeholder="Enter">
                                                        <select class="form-control" data-trigger id="choices-single-default1">
                                                            <option value="Choice 1">BTC</option>
                                                            <option value="Choice 2">ETH</option>
                                                            <option value="Choice 3">XRP</option>
                                                            <option value="Choice 4">DASH</option>
                                                            <option value="Choice 5">NEO</option>
                                                            <option value="Choice 6">LTC</option>
                                                            <option value="Choice 7">BSD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                                        <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                            aria-label="crypto buy select" placeholder="Enter">
                                                        <select class="form-control" data-trigger id="choices-single-default2">
                                                            <option value="Choice 1">BTC</option>
                                                            <option value="Choice 2">ETH</option>
                                                            <option value="Choice 3">XRP</option>
                                                            <option value="Choice 4">DASH</option>
                                                            <option value="Choice 5">NEO</option>
                                                            <option value="Choice 6">LTC</option>
                                                            <option value="Choice 7">BSD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-light pt-2 p-4 rounded-md !mb-6">
                                                <div class="text-[14px] py-2"><span class="font-medium text-dark">Price:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px] inline-block">6.003435</span><span class="text-dark font-medium float-end">BTC</span></div>
                                                <div class="text-[14px] py-2"><span class="font-medium text-dark">Amount:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px] inline-block">2,34,4543.00</span><span class="text-dark font-medium float-end">LTC</span></div>
                                                <div class="font-medium text-[14px] py-2">Total: <span class="text-[14px] inline-block">22.00 BTC</span></div>
                                                <div class="text-xs text-success">Additional Charges: 0.32%(0.0001231 BTC)</div>
                                            </div>
                                            <label class="font-medium text-xs">SELECT PAYMENT METHOD :</label>
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-2 mt-4">
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                            <label class="form-check-label text-xs" for="flexRadioDefault1">
                                                                Credit / Debit Cards
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label text-xs" for="flexRadioDefault2">
                                                                Paypal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                            <label class="form-check-label text-xs" for="flexRadioDefault3">
                                                                Wallet
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid mt-4 pt-1">
                                                <button type="button" class="ti-btn ti-btn-primary btn-wave">BUY</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Sell Crypto
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                                    <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                        aria-label="crypto buy select" placeholder="Enter">
                                                    <select class="form-control" data-trigger id="choices-single-default3">
                                                        <option value="Choice 1">BTC</option>
                                                        <option value="Choice 2">ETH</option>
                                                        <option value="Choice 3">XRP</option>
                                                        <option value="Choice 4">DASH</option>
                                                        <option value="Choice 5">NEO</option>
                                                        <option value="Choice 6">LTC</option>
                                                        <option value="Choice 7">BSD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                                    <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                        aria-label="crypto buy select" placeholder="Enter">
                                                    <select class="form-control" data-trigger id="choices-single-default4">
                                                        <option value="Choice 1">BTC</option>
                                                        <option value="Choice 2">ETH</option>
                                                        <option value="Choice 3">XRP</option>
                                                        <option value="Choice 4">DASH</option>
                                                        <option value="Choice 5">NEO</option>
                                                        <option value="Choice 6">LTC</option>
                                                        <option value="Choice 7">BSD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="mb-3">
                                                    <span class="form-label">Crypto Value :</span>
                                                    <div class="relative">
                                                        <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm flex items-center justify-between gap-4 mt-1 flex-wrap">
                                                            <div class="gap-2 flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar bg-light p-2">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="font-medium">Bitcoin - BTC</div>
                                                            </div>
                                                            <div class="text-end ms-auto">
                                                                <span class="font-medium block">0.374638535 BTC</span>
                                                                <span class="text-textmuted dark:text-textmuted/50">$5,364.65</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <div class="mb-3">
                                                    <span class="form-label">Deposit To :</span>
                                                    <div class="relative">
                                                        <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm flex items-center gap-2 mt-1">
                                                            <div class="leading-none">
                                                                <span class="avatar bg-light p-2">
                                                                    <i class="ri-bank-line text-info text-xl"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="font-medium block">Banking</span>
                                                                <span class="text-textmuted dark:text-textmuted/50">Checking ...</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light pt-2 p-4 rounded-md">
                                            <div class="text-[14px] py-2">
                                                <div class="inline-flex">
                                                    <span class="font-medium text-dark">Price:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px]">6.003435</span>
                                                </div>
                                                <span class="text-dark font-medium float-end">BTC</span>
                                            </div>
                                            <div class="text-[14px] py-2">
                                                <div class="inline-flex">
                                                    <span class="font-medium text-dark">Amount:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px]">2,34,4543.00</span>
                                                </div>
                                                <span class="text-dark font-medium float-end">LTC</span>
                                            </div>
                                            <div class="font-medium text-[14px] py-2">Total: <span class="text-[14px] inline-block">22.00 BTC</span></div>
                                            <div class="text-xs text-success">Additional Charges: 0.32%(0.0001231 BTC)</div>
                                        </div>
                                        <div class="grid mt-4">
                                            <button type="button" class="ti-btn bg-secondary text-white btn-wave">SELL</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Quick Secure Transfer
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="tab-pane border-0 p-0" id="sell-crypto" role="tabpanel">
                                            <div class="mb-3">
                                                <span class="form-label">Crypto Value :</span>
                                                <div class="relative">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm flex items-center justify-between gap-4 mt-1 flex-wrap">
                                                        <div class="gap-2 flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar bg-light p-2 avatar-md">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">Bitcoin - BTC</div>
                                                        </div>
                                                        <div class="text-end ms-auto">
                                                            <span class="font-medium block">0.374638535 BTC</span>
                                                            <span class="text-textmuted dark:text-textmuted/50">$5,364.65</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <span class="form-label">Deposit To :</span>
                                                <div class="relative">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="p-2 border border-defaultborder dark:border-defaultborder/10 rounded-sm flex items-center gap-2 mt-1">
                                                        <div class="leading-none">
                                                            <span class="avatar bg-light avatar-md p-2">
                                                                <i class="ri-bank-line text-info text-xl"></i>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="font-medium block">Banking</span>
                                                            <span class="text-textmuted dark:text-textmuted/50">Checking ...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <span class="form-label">Amount :</span> 
                                            </div>
                                            <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                                <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                    aria-label="crypto buy select" placeholder="Enter">
                                                <select class="form-control" data-trigger id="choices-single-default5">
                                                    <option value="Choice 1">BTC</option>
                                                    <option value="Choice 2">ETH</option>
                                                    <option value="Choice 3">XRP</option>
                                                    <option value="Choice 4">DASH</option>
                                                    <option value="Choice 5">NEO</option>
                                                    <option value="Choice 6">LTC</option>
                                                    <option value="Choice 7">BSD</option>
                                                </select>
                                            </div>
                                            <div class="p-4 bg-light rounded-md">
                                                <div class="text-[14px] pb-1">
                                                    <div class="inline-flex">
                                                        <span class="font-medium text-dark">Price:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px]">6.003435</span>
                                                    </div>
                                                    <span class="text-dark font-medium float-end">BTC</span>
                                                </div>
                                                <div class="text-[14px] pt-2">
                                                    <div class="inline-flex">
                                                        <span class="font-medium text-dark">Amount:</span><span class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px]">2,34,4543.00</span>
                                                    </div>
                                                    <span class="text-dark font-medium float-end">LTC</span>
                                                </div>
                                            </div>
                                            <div class="grid mt-3">
                                                <button type="button" class="ti-btn bg-primarytint2color text-white btn-wave waves-effect waves-light">Transfer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-9 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Buy & Sell Statistics
                                        </div>
                                        <div class="inline-flex rounded-sm"> <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] bg-primary btn-wave text-white waves-effect waves-light">1D</button>
                                            <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1W</button>
                                            <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1M</button>
                                            <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">3M</button>
                                            <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">6M</button>
                                            <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary !rounded-s-none waves-effect waves-light">1Y</button>
                                        </div>
                                    </div>
                                    <div class="box-body xl:!p-0">
                                        <div class="grid grid-cols-12 items-center">
                                            <div class="xl:col-span-8 col-span-12 pe-0 border-e border-dashed border-defaultborder dark:border-defaultborder/10">
                                                <div class="flex flex-wrap items-center border-b border-dashed border-defaultborder dark:border-defaultborder/10 mb-3 p-4 gap-4 justify-between">
                                                    <div>
                                                        <span class="block mb-1">Total Buy</span>
                                                        <span class="block font-medium text-[1rem] text-success">$324.25 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="block mb-1">Total Sell</span>
                                                        <span class="block font-medium text-[1rem] text-danger">$4,235.25 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="block mb-1">Available Balance</span>
                                                        <span class="block font-medium text-[1rem] text-primary">$22,803.92 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="block mb-1">Total Crypto Asset Value</span>
                                                        <span class="block font-medium text-[1rem] text-warning">$4,56,683.00 USD</span>
                                                    </div>
                                                    <div></div>
                                                </div>
                                                <div id="buy_sell-statistics" class="px-3"></div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12 xl:ps-0">
                                                <div class="p-4">
                                                    <div class="box bg-light shadow-none dark:!bg-light">
                                                        <div class="box-body">
                                                            <div class="flex items-center justify-between">
                                                                <div>
                                                                    <span class="block text-textmuted dark:text-textmuted/50 mb-2">BTC/USD</span>
                                                                    <h5 class="font-medium mb-1">27.53612</h5>
                                                                    <span class="text-danger block text-xs mt-1">-0.06%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box bg-light shadow-none dark:!bg-light">
                                                        <div class="box-body">
                                                            <div class="flex items-center justify-between">
                                                                <div>
                                                                    <span class="block text-textmuted dark:text-textmuted/50 mb-2">ETH/USD</span>
                                                                    <h5 class="font-medium mb-1">20.6782</h5>
                                                                    <span class="text-success block text-xs mt-1">+2.86%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box bg-light shadow-none dark:!bg-light mb-0">
                                                        <div class="box-body">
                                                            <div class="flex items-center justify-between">
                                                                <div>
                                                                    <span class="block text-textmuted dark:text-textmuted/50 mb-2">LTC/USD</span>
                                                                    <h5 class="font-medium mb-1">54.2912</h5>
                                                                    <span class="text-success block text-xs mt-1">+15.93%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="">
                                                                    </span>
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
                        <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Crypto Buy & Sell JS -->
        @vite('resources/assets/js/crypto-buy-sell.js')
        
    
@endsection