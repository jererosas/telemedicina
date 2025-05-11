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
                                    <li class="breadcrumb-item active" aria-current="page">Currency Exchange</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Currency Exchange</h1>
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
                            <div class="box currency-exchange-card">
                                <div class="box-body p-5 flex items-center justify-center z-[1]">
                                    <div class="container">
                                        <h3 class="text-white text-center">Buy and Sell Coins without additional fees</h3>
                                        <span class="block text-[1rem] text-white text-center op-8 mb-4">
                                            Buy now and get +50% extra bonus Minimum pre-sale amount 100 Crypto Coin. We accept BTC crypto-currency..
                                        </span>
                                        <div class="p-4 mb-4 rounded currency-exchange-area">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                <div class="xxl:col-span-3 col-span-12">
                                                    <input type="text" class="form-control" value="0.0453" placeholder="Enter Amount">
                                                </div>
                                                <div class="xxl:col-span-2 col-span-12">
                                                    <div>
                                                        <select class="form-control" data-trigger name="Vacancies">
                                                            <option value="Choice 1">Bitcoin</option> 
                                                            <option value="Choice 2">Etherium</option> 
                                                            <option value="Choice 3">Litecoin</option>
                                                            <option value="Choice 4">Ripple</option>
                                                            <option value="Choice 5">Cardano</option>
                                                            <option value="Choice 6">Neo</option>
                                                            <option value="Choice 7">Stellar</option>
                                                            <option value="Choice 8">EOS</option>
                                                            <option value="Choice 9">NEM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 col-span-12 text-center">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn bg-primarytint1color !text-white ti-btn-icon ti-btn-sm my-2 !rounded-full"><i class="ti ti-arrows-exchange text-[1.1875rem] align-middle"></i></a>
                                                </div>
                                                <div class="xxl:col-span-3 col-span-12">
                                                    <input type="text" class="form-control" value="1350.93" placeholder="Exchange Amount">
                                                </div>
                                                <div class="xxl:col-span-2 col-span-12">
                                                    <select class="form-control" data-trigger name="Vacancies">
                                                        <option value="Choice 1">USD</option> 
                                                        <option value="Choice 2">Pound</option> 
                                                        <option value="Choice 3">Rupee</option>
                                                        <option value="Choice 4">Euro</option>
                                                        <option value="Choice 5">Won</option>
                                                        <option value="Choice 6">Dinar</option>
                                                        <option value="Choice 7">Rial</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="ti-btn ti-btn-success btn-wave">Exchange Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Bitcoin</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - BTC</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                24.3% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.59
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00434</span>
                                                <span class="text-success ms-1">$30.29</span>
                                            </div>
                                            <div id="btc-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Ethereum</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - ETH</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                18.7% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.92
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.01758</span>
                                                <span class="text-success ms-1">$2564.89</span>
                                            </div>
                                            <div id="eth-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Dash</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - DASH</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                12.5% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">-0.30
                                                    <i class="ti ti-arrow-big-down-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-danger text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00487</span>
                                                <span class="text-success ms-1">$116.78</span>
                                            </div>
                                            <div id="dash-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Litecoin</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - LTC</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                8.2% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.15
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00789</span>
                                                <span class="text-success ms-1">$158.42</span>
                                            </div>
                                            <div id="ltc-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Ripple</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - XRP</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                6.5% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.10
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00123</span>
                                                <span class="text-success ms-1">$0.79</span>
                                            </div>
                                            <div id="xrs-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Golem.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Golem</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - GNT</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                4.8% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">-0.02
                                                    <i class="ti ti-arrow-big-down-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-danger text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.000045</span>
                                                <span class="text-success ms-1">$1.23</span>
                                            </div>
                                            <div id="glm-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Monero</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - XMR</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                3.2% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.08
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00456</span>
                                                <span class="text-success ms-1">$182.34</span>
                                            </div>
                                            <div id="monero-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/EOS.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">EOS</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - EOS</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                5.7% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.23
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.00234</span>
                                                <span class="text-success ms-1">$4.78</span>
                                            </div>
                                            <div id="eos-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body">
                                    <div class="flex align-items-end justify-between flex-wrap">
                                        <div>
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Stratis.svg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="font-medium mb-0">Stratis</h6>
                                                    <span class="text-textmuted dark:text-textmuted/50"> - STRAX</span>
                                                </div>
                                            </div>
                                            <div class="text-2xl flex items-center font-medium">
                                                2.1% 
                                                <span class="text-xs text-primarytint1color opacity-70 font-normal ms-1">+0.04
                                                    <i class="ti ti-arrow-big-up-line ms-1 inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success text-[10px] ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="text-[15px] text-primary">0.001234</span>
                                                <span class="text-success ms-1">$2.34</span>
                                            </div>
                                            <div id="strax-currency-chart" class="mt-4 w-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="text-center my-4"> <button class="ti-btn ti-btn-soft-primary !border !border-primary opacity-60" type="button" disabled=""> <span class="ti-spinner  !w-[1rem] !h-[1rem] align-middle" role="status" aria-hidden="true"></span> Loading... </button> </div>
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

        <!-- Crypto Currency Exchange JS -->
        @vite('resources/assets/js/crypto-currency-exchange.js')
        

@endsection