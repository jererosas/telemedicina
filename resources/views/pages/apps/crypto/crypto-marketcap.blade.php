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
                                    <li class="breadcrumb-item active" aria-current="page">Marketcap</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Marketcap</h1>
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
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="sm:flex flex-wrap">
                                        <div class="sm:flex items-center">
                                            <div>
                                                <div class="sm:flex items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Bitcoin
                                                        </h6>
                                                        <span class="text-textmuted dark:text-textmuted/50 "> BTC - Rank 1</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="text-xl font-medium leading-none text-primary mb-1">$1.04</span> 
                                                        <span class="mb-0 text-textmuted dark:text-textmuted/50 ms-2"><span class="text-textmuted dark:text-textmuted/50">Vol:</span><span class="text-success font-medium"> (+2.33%)</span></span>
                                                    </div>
                                                    <p class="font-medium mb-0">$35,876.29 <span class="mb-1 font-normal text-[13px] text-textmuted dark:text-textmuted/50">(BTC / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:ms-auto sm:text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 font-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 text-[14px]">$1.054B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        +280.30<span class="text-success numberfont">(0.96%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="bitcoin-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="sm:flex flex-wrap">
                                        <div class="sm:flex items-center">
                                            <div>
                                                <div class="sm:flex items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Dash
                                                        </h6>
                                                        <span class="text-textmuted dark:text-textmuted/50"> DASH - Rank 50</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="text-xl font-medium leading-none text-primary mb-1">$112.45</span> 
                                                        <span class="mb-0 text-textmuted dark:text-textmuted/50 ms-2"><span class="text-textmuted dark:text-textmuted/50">Vol:</span><span class="text-success font-medium"> (+1.25%)</span></span>
                                                    </div>
                                                    <p class="font-medium mb-0">$112.34 <span class="mb-1 font-normal text-[13px] text-textmuted dark:text-textmuted/50">(DASH / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:ms-auto sm:text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 font-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 text-[14px]">$1.21B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        -0.05<span class="text-danger numberfont">(-0.02%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="dashcoin-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="sm:flex flex-wrap">
                                        <div class="sm:flex items-center">
                                            <div>
                                                <div class="sm:flex items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Ethereum
                                                        </h6>
                                                        <span class="text-textmuted dark:text-textmuted/50"> ETH - Rank 2</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="text-xl font-medium leading-none text-primary mb-1">$2.15K</span> 
                                                        <span class="mb-0 text-textmuted dark:text-textmuted/50 ms-2"><span class="text-textmuted dark:text-textmuted/50">Vol:</span><span class="text-success font-medium"> (+3.12%)</span></span>
                                                    </div>
                                                    <p class="font-medium mb-0">$2,135.67 <span class="mb-1 font-normal text-[13px] text-textmuted dark:text-textmuted/50">(ETH / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:ms-auto sm:text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 font-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 text-[14px]">$250.87B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        +5.42<span class="text-success numberfont">(2.21%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="etherium-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2  -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Crypto MarketCap
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary !m-0 ti-btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Market Cap</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Price</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Trading Volume</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Price Change (24h)</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Rank</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">All-Time High (ATH)</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <button class="ti-btn ti-btn-secondary !m-0 ti-btn-sm btn-wave waves-effect waves-light">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table ti-custom-table-head">
                                            <thead>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <th></th>
                                                    <th scope="col" class="font-medium">#</th>
                                                    <th scope="col">Crypto Name</th>
                                                    <th scope="col">MarketCap</th>
                                                    <th scope="col">last 1Week</th>
                                                    <th scope="col">1h Change</th>
                                                    <th scope="col">Price<span class="text-textmuted dark:text-textmuted/50 ms-1">(USD)</span></th>
                                                    <th scope="col">24h Change</th>
                                                    <th scope="col">Volume (24h)</th>
                                                    <th scope="col">Circulating Supply</th>
                                                    <th scope="col">Trade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Bitcoin (BTC)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$582.23B</span>
                                                    </td>
                                                    <td>
                                                        <div id="btc-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>0.483%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$29,948.80</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.239%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$11.79B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block mb-2">
                                                                19.43M of (21M)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success opacity-[0.5] w-[88%]" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div> <div class="progress-bar !rounded-s-none !rounded-e-full !bg-danger opacity-[0.5] w-[12%]" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div> </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Etherium (ETH)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$226.91B</span>
                                                    </td>
                                                    <td>
                                                        <div id="eth-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>0.87%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1,895.96</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>0.29%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$2.83B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block">
                                                                120M
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Golem.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Golem (GLM)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$202.07M</span>
                                                    </td>
                                                    <td>
                                                        <div id="glm-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.61%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1.201472</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>34.96%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$2,112,645 USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block mb-2">
                                                                1,000M
                                                            </span>
                                                            <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !rounded-full !bg-success opacity-[0.5] w-full" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Dash (DASH)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$365.877M</span>
                                                    </td>
                                                    <td>
                                                        <div id="dash-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.59%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$32.13</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>1.24%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$3.61M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);"> <span class="font-medium block mb-2"> 11.37M of (18.92M) </span> <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success opacity-[0.5] w-[56%]" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div> <div class="progress-bar !rounded-s-none !rounded-e-full !rounded-full !bg-danger opacity-[0.5] w-[44%]" role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div> </div> </a>  
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Litecoin (LTC)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$6.80B</span>
                                                    </td>
                                                    <td>
                                                        <div id="lite-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.90%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$92.98</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>2.22%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$11.46B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);"> <span class="font-medium block mb-2"> 73.40M </span> <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success !rounded-full opacity-[0.5] w-full" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> </div> </a> 
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Ripple (XRP)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$42.48B</span>
                                                    </td>
                                                    <td>
                                                        <div id="ripple-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.01%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1.83</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>0.91%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$2.99B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);"> <span class="font-medium block mb-2"> 52.54B of (100B) </span> <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success opacity-[0.5] w-[10%]" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <div class="progress-bar !rounded-s-none !rounded-e-full  !bg-danger opacity-[0.5] w-[90%]" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div> </div> </a>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/EOS.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">EOS</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$85.2M</span>
                                                    </td>
                                                    <td>
                                                        <div id="eos-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>0.61%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1.765957</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>20.65%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$116.91M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);"> <span class="font-medium block mb-2"> 52.54B of (100B) </span> <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success opacity-[0.5] w-[10%]" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <div class="progress-bar !rounded-s-none !rounded-e-full  !bg-danger opacity-[0.5] w-[90%]" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div> </div> </a>
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bytecoin.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Bytecoin (BCN)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$6.2M</span>
                                                    </td>
                                                    <td>
                                                        <div id="bytecoin-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>25.24%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1.00039</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>27.12%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$6,184 USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block mb-2">
                                                                184.02B of (184.07B)
                                                            </span>
                                                            <div class="progress-stacked  progress-xs w-[75%] mb-4 flex"> <div class="progress-bar !bg-success opacity-[0.5] w-[99%]" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div> <div class="progress-bar !rounded-s-none !rounded-e-full  !bg-danger opacity-[0.5] w-[1%]" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div> </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/IOTA.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">IOTA</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$510.429M</span>
                                                    </td>
                                                    <td>
                                                        <div id="iota-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>1.08%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$1.184992</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>1.41%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$7.50M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block">
                                                                2.78B
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line text-[1rem] text-textmuted dark:text-textmuted/50"></i></a></td>
                                                    <td>10</td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium"><a href="javascript:void(0);">Monero</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$3.062B</span>
                                                    </td>
                                                    <td>
                                                        <div id="monero-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-up text-[15px] font-medium"></i>3.22%</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">
                                                            <a href="javascript:void(0);">$165.76</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger font-medium"><i class="ti ti-arrow-narrow-down text-[15px] font-medium"></i>3.48%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="block font-medium">$105.8M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="font-medium block">
                                                                18.15M
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="ti-btn ti-btn-soft-success ti-btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer flex sm:justify-end justify-center">
                                    <nav aria-label="..." class="me-4">
                                        <ul class="ti-pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link px-3 py-[0.375rem] !border-e-0">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item " aria-current="page">
                                                <a class="page-link active px-3 py-[0.375rem] !border-e-0"
                                                    href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-e-0"
                                                href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2  -->

                </div>
            </div>
            <!-- End::app-content -->
        
@endsection

@section('scripts')
            
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Crypto MarketCap JS -->
        @vite('resources/assets/js/crypto-marketcap.js')
        
   
@endsection