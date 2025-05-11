@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS -->
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
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Crypto</h1>
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="swiper crypto-swiper swiper-basic">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">134.56 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    BTC</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Bitcoin</p>
                                                        </div>
                                                    </div>
                                                    <div id="btc-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $18,574.58 USD</p>
                                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.57%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">578.05 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    BNB</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Binanace</p>
                                                        </div>
                                                    </div>
                                                    <div id="bnb-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $26,478.09 USD</p>
                                                    <div class="text-danger"><i class="ti ti-trending-down me-1"></i>-0.12%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">324.06 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    ADA</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Cardano</p>
                                                        </div>
                                                    </div>
                                                    <div id="ada-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $13,124.02 USD</p>
                                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.12%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">245.15 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    ETH</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Ethereum</p>
                                                        </div>
                                                    </div>
                                                    <div id="eth-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $27,684.05 USD</p>
                                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.15%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">297.01 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    USDT</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Tether</p>
                                                        </div>
                                                    </div>
                                                    <div id="usdt-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $26,478.09 USD</p>
                                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+1.15%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg')}}"
                                                                alt="" class="w-auto xrp-logo">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">789.45 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    XRP</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Ripple</p>
                                                        </div>
                                                    </div>
                                                    <div id="xrp-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 py-1">
                                                        $14,872.03 USD</p>
                                                    <div class="text-danger"><i class="ti ti-trending-down me-1"></i>-0.16%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center gap-2 justify-between flex-wrap">
                                                    <div class="flex items-start gap-2">
                                                        <div
                                                            class="leading-none avatar avatar-sm p-1 bg-light avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}"
                                                                alt="" class="w-auto">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0">245.15 <span
                                                                    class="text-textmuted dark:text-textmuted/50 font-medium text-[13px]">
                                                                    SOL</span></h5>
                                                            <p class="mb-0 text-textmuted dark:text-textmuted/50 text-xs">
                                                                Solana</p>
                                                        </div>
                                                    </div>
                                                    <div id="sol-marketcap"></div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-between mt-3 bg-light px-2 p-1 rounded-md">
                                                    <p class="mb-0 font-medium text-textmuted dark:text-textmuted/50 p-1">
                                                        $18,784.05 USD</p>
                                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.15%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title flex-auto">
                                        Crypto Analysis
                                    </div>
                                    <div class="inline-flex rounded-sm"> <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] bg-primary btn-wave text-white waves-effect waves-light">1D</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1W</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1M</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary !rounded-s-none waves-effect waves-light">1Y</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap p-4 bg-light rounded-md mb-3 items-center">
                                        <div class="me-3">
                                            <div class="btn-group ms-2 ti-dropdown hs-dropdown">
                                                <button type="button" class="ti-btn bg-primary text-white dropdown-toggle !mb-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}"
                                                            alt=""></span>Bitcoin <i class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                </button>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><span
                                                                class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}"
                                                                    alt=""></span>Etherium</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><span
                                                                class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}"
                                                                    alt=""></span>Tether</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><span
                                                                class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg')}}"
                                                                    alt=""></span>XRP</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><span
                                                                class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tron-trx-logo.svg')}}"
                                                                    alt=""></span>TRON</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap sm:justify-evenly flex-auto">
                                            <div class="m-sm-0 m-2">
                                                <span>Symbol</span>
                                                <p class="mb-0">BTC</p>
                                            </div>
                                            <div class="m-sm-0 m-2">
                                                <span>Price Benchmark</span>
                                                <p class="mb-0">136.00%</p>
                                            </div>
                                            <div class="m-sm-0 m-2">
                                                <span>Price (USD)</span>
                                                <p class="text-success mb-0">$54,564.60</p>
                                            </div>
                                            <div class="m-sm-0 m-2">
                                                <span>Change (24H)</span>
                                                <p class="text-danger mb-0">-0.14%</p>
                                            </div>
                                            <div class="m-sm-0 m-2">
                                                <span>Market Cap</span>
                                                <p class="mb-0">$1.32T</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="crypto-analysis"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-body p-0">
                                    <div class="p-4 m-2 rounded-sm bg-primary text-white bg-crypto-balance">
                                        <div class="flex items-center gap-2 justify-between">
                                            <div>
                                                <div class="mb-1 opacity-90">Total Balance</div>
                                                <h4 class="text-white mb-1 font-medium me-2">$262,933.05 USD</h4>
                                                <span class="opacity-70 text-xs">Increased by </span><span
                                                    class="badge bg-success mt-2 text-white p-1 text-end ms-1"><i
                                                        class="ti ti-trending-up me-2"></i>12.2%</span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <div class="avatar avatar-lg bg-primarytint1color shadow">
                                                    <i class="ri-bank-line !text-[1.5rem] leading-none"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-12 gap-x-6 border-t border-dashed border-defaultborder g-0 dark:border-defaultborder/10">
                                        <div class="xl:col-span-6 sm:col-span-6 col-span-12 border-e border-dashed border-defaultborder dark:border-defaultborder/10">
                                            <div class="p-4">
                                                <div class="flex items-center justify-center gap-4">
                                                    <span class="avatar avatar-md bg-primarytint2color">
                                                        <i class="ri-arrow-left-down-fill text-xl"></i>
                                                    </span>
                                                    <div>
                                                        <div class="font-medium text-textmuted dark:text-textmuted/50">
                                                            Deposit</div>
                                                        <h5 class="mb-0">$1,654 USD</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="p-4">
                                                <div class="flex items-center justify-center gap-4">
                                                    <span class="avatar avatar-md bg-primarytint3color">
                                                        <i class="ri-arrow-right-up-fill text-xl"></i>
                                                    </span>
                                                    <div>
                                                        <div class="font-medium text-textmuted dark:text-textmuted/50">
                                                            Withdraw</div>
                                                        <h5 class="mb-0">$654 USD</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">Currency Converter</div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button
                                            class="ti-btn ti-btn-sm ti-btn-light border flex items-center"
                                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            View All <i class="bx bx-caret-down text-[15px]"></i>
                                        </button>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Weakly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex gap-2 items-center buy-crypto">
                                        <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                            <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                aria-label="crypto buy select" placeholder="Enter">
                                            <select class="form-control" data-trigger id="choices-single-default">
                                                <option value="Choice 1">BTC</option>
                                                <option value="Choice 2">ETH</option>
                                                <option value="Choice 3">XRP</option>
                                                <option value="Choice 4">DASH</option>
                                                <option value="Choice 5">NEO</option>
                                                <option value="Choice 6">LTC</option>
                                                <option value="Choice 7">BSD</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn bg-secondary text-white ti-btn-icon ti-btn-sm !my-0 !rounded-full"><i
                                                    class="ti ti-arrows-exchange text-[1.1875rem] align-middle"></i></a>
                                        </div>
                                        <div class="input-group mb-4 flex flex-nowrap mt-2 crypto-input">
                                            <input type="text" class="form-control form-control-sm !border-s !border-e-0 crypto-buy-sell-input"
                                                aria-label="crypto buy select" placeholder="25,784.00">
                                            <select class="form-control" data-trigger id="choices-single-default1">
                                                <option value="Choice 1">USD</option>
                                                <option value="Choice 2">AED</option>
                                                <option value="Choice 3">AUD</option>
                                                <option value="Choice 4">ARS</option>
                                                <option value="Choice 5">AZN</option>
                                                <option value="Choice 6">BGN</option>
                                                <option value="Choice 7">BRL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="bg-light p-4 rounded-sm mt-2">
                                        <div class="pb-1"><span class="text-defaulttextcolor">Transaction Fee</span><span
                                                class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px] inline-block float-end">$3.04</span>
                                        </div>
                                        <div class="text-[14px] py-1"><span class="text-defaulttextcolor">Other
                                                Charges</span><span
                                                class="text-textmuted dark:text-textmuted/50 ms-2 text-[14px] inline-block float-end">$6.55</span>
                                        </div>
                                        <div class="font-semibold text-[14px] pt-1">Total: <span
                                                class="text-[14px] inline-block float-end">$25,784.00</span></div>
                                    </div>
                                    <div class=" mt-2 pt-1 flex gap-1">
                                        <button type="button" class="ti-btn bg-primarytint1color/10 !text-primarytint1color me-1 flex-auto">History<i
                                                class="ms-2 ti ti-arrow-narrow-right align-middle"></i></button>
                                        <button type="button" class="ti-btn bg-primary text-white flex-auto">Convert<i
                                                class="ms-2 ti ti-arrow-narrow-right align-middle"></i></button>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Market Cap
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-light btn-wave ti-btn-sm text-textmuted dark:text-textmuted/50 waves-effect waves-light">View
                                        All<i class="ti ti-arrow-narrow-right align-middle"></i></a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none market-cap-list mb-1">
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <span class="avatar bg-primary/10 avatar-rounded svg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Bitcoin</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">BTC</span>
                                                        <div class="vr"></div>
                                                        <span>$15 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$18,907.01</span>
                                                    <div
                                                        class="flex items-center text-success gap-2 leading-none text-[13px]">
                                                        <span class="block">+1,30.90</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-up"></i>2.9%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <div class="avatar bg-secondary/10 svg-secondary avatar-rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Ethereum</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">ETH</span>
                                                        <div class="vr"></div>
                                                        <span>$11 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$15,135.25</span>
                                                    <div
                                                        class="flex items-center text-success gap-2 leading-none text-[13px]">
                                                        <span class="block">+1,07.09</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-up"></i>3.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <span class="avatar bg-success/10 svg-success avatar-rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Dash</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">DASH</span>
                                                        <div class="vr"></div>
                                                        <span>$23 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$15,176.46</span>
                                                    <div
                                                        class="flex items-center text-danger gap-2 leading-none text-[13px]">
                                                        <span class="block">-1,8.01</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-down"></i>0.1%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <div class="avatar bg-warning/10 svg-warning avatar-rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Golem</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">GLM</span>
                                                        <div class="vr"></div>
                                                        <span>$2 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$11,576.1</span>
                                                    <div
                                                        class="flex items-center text-success gap-2 leading-none text-[13px]">
                                                        <span class="block">+1,67.08</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-up"></i>0.03%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <div class="avatar bg-info/10 svg-info avatar-rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Litecoin</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">LTC</span>
                                                        <div class="vr"></div>
                                                        <span>$13 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$16,581.81</span>
                                                    <div
                                                        class="flex items-center text-danger gap-2 leading-none text-[13px]">
                                                        <span class="block">-1,01.05</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-down"></i>3.8%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <div class="avatar bg-danger/10 svg-danger avatar-rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                            viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                            </path>
                                                            <path fill="#fff"
                                                                d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-auto">
                                                    <span class="font-semibold block mb-1">Augur</span>
                                                    <div
                                                        class="flex items-center text-textmuted dark:text-textmuted/50 gap-2 leading-none text-[13px]">
                                                        <span class="block">REP</span>
                                                        <div class="vr"></div>
                                                        <span>$10 B</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="block h6 mb-1 font-semibold">$10,107.51</span>
                                                    <div
                                                        class="flex items-center text-success gap-2 leading-none text-[13px]">
                                                        <span class="block">+1,10.30</span>
                                                        <div class="vr"></div>
                                                        <span><i class="ti ti-arrow-narrow-up"></i>1.89%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">Assets Overview</div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                            data-popper-placement="bottom-start">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Today </a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div id="balanceAnalysis" class=""></div>
                                    <div class="border-t border-dashed p-4 border-defaultborder dark:border-defaultborder/10">
                                        <div class="flex items-center gap-4 mb-3">
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-wallet-3-line text-xl"></i>
                                            </span>
                                            <div>
                                                <div class="font-medium text-textmuted dark:text-textmuted/50 opacity-70">
                                                    Funding</div>
                                                <h5 class="mb-0">$54,784 USD</h5>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="text-success font-medium"><i
                                                        class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-4 pt-1 mb-1">
                                            <span class="avatar avatar-md bg-primarytint1color">
                                                <i class="ri-arrow-up-down-line text-xl"></i>
                                            </span>
                                            <div>
                                                <div class="font-medium text-textmuted dark:text-textmuted/50 opacity-70">
                                                    Trading</div>
                                                <h5 class="mb-0">$23,489 USD</h5>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="text-danger font-medium"><i
                                                        class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">Transaction History</div>
                                    <a href="javascript:void(0);"
                                        class="text-textmuted dark:text-textmuted/50 underline link-offset-2">View All</a>
                                </div>
                                <div class="box-body p-0 pt-2">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th>Cryptocurrency</th>
                                                    <th>Action</th>
                                                    <th>Date & Time</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span
                                                                    class="avatar avatar-rounded avatar-md p-2 bg-primarytint3color/10">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <span class="block font-medium">Bitcoin</span>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">BTC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Deposited</td>
                                                    <td>12 Apr, 2024 13:12</td>
                                                    <td>
                                                        <span class="text-success">+ 25,00 BTC<i
                                                                class="ri-arrow-up-line text-xs leading-none text-success ms-1"></i></span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span
                                                                    class="avatar avatar-rounded avatar-md p-2 bg-gray-200 dark:bg-light">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <span class="block font-medium">Ethereum</span>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">ETH</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Withdraw</td>
                                                    <td>20 Apr, 2024 08:14</td>
                                                    <td>
                                                        <span class="text-danger">- 25,00 ETH<i
                                                                class="ri-arrow-down-line text-xs leading-none text-danger ms-1"></i></span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span
                                                                    class="avatar avatar-rounded avatar-md p-2 bg-primarytint3color/10">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <span class="block font-medium">Bitcoin</span>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">BTC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Buy</td>
                                                    <td>12 Apr, 2024 16:37</td>
                                                    <td>
                                                        <span class="text-success">+ 25,00 BTC<i
                                                                class="ri-arrow-up-line text-xs leading-none text-success ms-1"></i></span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span
                                                                    class="avatar avatar-rounded avatar-md p-2 bg-success/10">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <span class="block font-medium">Tether</span>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">USDT</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Convert</td>
                                                    <td>12 Apr, 2024 11:45</td>
                                                    <td>
                                                        <span class="text-success">+ $610,539 USDT<i
                                                                class="ri-arrow-up-line text-xs leading-none text-success ms-1"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b-0">
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span
                                                                    class="avatar avatar-rounded avatar-md p-2 bg-gray-200 dark:bg-light">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-auto">
                                                                <span class="block font-medium">Ethereum</span>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">ETH</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-b-0">Deposited</td>
                                                    <td class="border-b-0">20 Apr, 2024 08:55</td>
                                                    <td class="border-b-0">
                                                        <span class="text-danger">- 25,00 ETH<i
                                                                class="ri-arrow-down-line text-xs leading-none text-danger ms-1"></i></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">My Portfolio</div>
                                    <div class="inline-flex rounded-sm"> <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] bg-primary btn-wave text-white waves-effect waves-light">1D</button>
                                        <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1W</button>
                                        <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary waves-effect waves-light">1M</button>
                                        <button type="button" class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.45rem] !px-[0.75rem] btn-wave ti-btn-soft-primary !rounded-s-none waves-effect waves-light">1Y</button>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    <th>#</th>
                                                    <th>Coin</th>
                                                    <th>Price</th>
                                                    <th>Price Graph</th>
                                                    <th>24h Volume</th>
                                                    <th>24h Change</th>
                                                    <th>Market Cap</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Bitcoin - BTC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $34,283.53
                                                    </td>
                                                    <td>
                                                        <div id="bitcoin-change"></div>
                                                    </td>
                                                    <td>
                                                        21,457.02M
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 text-[15px] align-middle"></i>39.23%</span>
                                                    </td>
                                                    <td>
                                                        $669,649,033,571
                                                    </td>
                                                    <td>
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Etherium - ETH</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $1,800.81
                                                    </td>
                                                    <td>
                                                        <div id="etherium-change"></div>
                                                    </td>
                                                    <td>
                                                        11,784.22M
                                                    </td>
                                                    <td>
                                                        <span class="text-danger"><i
                                                                class="ri-arrow-down-s-fill me-1 text-[15px] align-middle"></i>58.63%</span>
                                                    </td>
                                                    <td>
                                                        $216,466,869,907
                                                    </td>
                                                    <td>
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Tether - USDT</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $1.00
                                                    </td>
                                                    <td>
                                                        <div id="tether-change"></div>
                                                    </td>
                                                    <td>
                                                        33,874.25M
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 text-[15px] align-middle"></i>49.30%</span>
                                                    </td>
                                                    <td>
                                                        $84,641,938,780
                                                    </td>
                                                    <td>
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Solana - SOL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $35.97
                                                    </td>
                                                    <td>
                                                        <div id="solana-change"></div>
                                                    </td>
                                                    <td>
                                                        33,749.56M
                                                    </td>
                                                    <td>
                                                        <span class="text-danger"><i
                                                                class="ri-arrow-down-s-fill me-1 text-[15px] align-middle"></i>144.58%</span>
                                                    </td>
                                                    <td>
                                                        $15,083,616,607
                                                    </td>
                                                    <td>
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Cardano - ADA</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $0.3008
                                                    </td>
                                                    <td>
                                                        <div id="cardano-change"></div>
                                                    </td>
                                                    <td>
                                                        89,554.62M
                                                    </td>
                                                    <td>
                                                        <span class="text-danger"><i
                                                                class="ri-arrow-down-s-fill me-1 text-[15px] align-middle"></i>51.15%</span>
                                                    </td>
                                                    <td>
                                                        $10,600,249,889
                                                    </td>
                                                    <td>
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b-0">
                                                        6
                                                    </td>
                                                    <td class="border-b-0">
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[14px]">Binance - BNB</div>
                                                        </div>
                                                    </td>
                                                    <td class="border-b-0">
                                                        $227.36
                                                    </td>
                                                    <td class="border-b-0">
                                                        <div id="binance-change"></div>
                                                    </td>
                                                    <td class="border-b-0">
                                                        65,547.15M
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 text-[15px] align-middle"></i>25.85%</span>
                                                    </td>
                                                    <td class="border-b-0">
                                                        $34,488,924,548
                                                    </td>
                                                    <td class="border-b-0">
                                                        <div class="btn-grp">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary me-2 !mb-0">Buy</button>
                                                            <button type="button"
                                                                class="ti-btn ti-btn-sm ti-btn-soft-primary1 !mb-0">Trade</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex items-center flex-wrap">
                                        <div>
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2"></i>
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
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0);">2</a></li>

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
                    </div>
                    <!-- End:: row-4 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Crypto Dashboard -->
        @vite('resources/assets/js/crypto-dashboard.js')
        

@endsection