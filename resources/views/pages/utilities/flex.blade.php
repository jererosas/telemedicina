@extends('layouts.master')

@section('styles')
  

@endsection

@section('content')

            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Flex</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Flex</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn ti-btn-white btn-wave">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                   <!-- Start:: row-1 -->
                   <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Enable flex behaviors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex p-2">I'm a flexbox container!</div>
                                    </div>
                                    <div class="bd-example flex-container">
                                        <div class="inline-flex p-2">I'm an inline flexbox container!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Direction
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container">
                                        <div class="flex flex-row mb-4">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                        <div class="flex flex-row-reverse">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Direction flex-col and flex-col-reverse
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <p class="mb-4">Direction Column</p>
                                        <div class="flex flex-col mb-4">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                        <p class="mb-4">Column Reverse</p>
                                        <div class="flex flex-col-reverse">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Justify content
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex justify-start mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-end mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-center mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-between mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-around mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-evenly">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Align items
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bd-example flex-container mb-4">
                                    <div class="flex items-start mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex items-end mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex items-center mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex items-baseline mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex items-stretch h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Align self
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bd-example flex-container mb-4">
                                    <div class="flex mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="self-start p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="self-end p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="self-center p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex mb-4 h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="self-baseline p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="flex h-[100px]">
                                        <div class="p-2">Flex item</div>
                                        <div class="self-stretch p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="grid gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Align content ( Heads up! This property has no effect on single rows of flex
                                            items.)
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex content-start flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex content-end flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex content-center flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex content-between flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex content-around flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex content-stretch flex-wrap mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Order
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex flex-nowrap">
                                                <div class="order-3 p-2">First flex item</div>
                                                <div class="order-2 p-2">Second flex item</div>
                                                <div class="order-1 p-2">Third flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="grid  gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Fill
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex">
                                                <div class="p-2 flex-grow">Flex item with a lot of content</div>
                                                <div class="p-2 flex-grow">Flex item</div>
                                                <div class="p-2 flex-grow">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Grow and shrink
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex mb-4">
                                                <div class="p-2 flex-grow">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Third flex item</div>
                                            </div>
                                            <div class="flex">
                                                <div class="p-2 w-full">Flex item</div>
                                                <div class="p-2 flex-shrink">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Auto margins
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex mb-4">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>

                                            <div class="flex mb-4">
                                                <div class="me-auto p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>

                                            <div class="flex mb-4">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="ms-auto p-2">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Wrap
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex flex-nowrap w-32">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>

                                            <div class="flex flex-wrap">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                            <div class="flex flex-wrap-reverse">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            With items
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="bd-example flex-container mb-4">
                                            <div class="flex items-start flex-col mb-4 h-[200px]">
                                                <div class="mb-auto p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                            </div>

                                            <div class="flex items-end flex-col mb-4 h-[200px]">
                                                <div class="p-2">Flex item</div>
                                                <div class="p-2">Flex item</div>
                                                <div class="mt-auto p-2">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')
            

@endsection