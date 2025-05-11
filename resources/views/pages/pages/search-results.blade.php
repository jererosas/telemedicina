@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Search</h1>
                        </div>
                        <div class="ti-btn-list">
                            <button
                                class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
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
                            <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="p-4 border-b border-defaultborder dark:border-defaultborder/10">
                                        <div class="flex mb-3 search-result-input gap-2">
                                            <input type="text"
                                                class="form-control form-control-lg !border-s !ps-[2rem] !bg-light dark:!bg-light !rounded-full"
                                                placeholder="Search Here ..." aria-label="Search Here ..."
                                                aria-describedby="button-addon1">
                                            <span
                                                class="absolute start-[28px] top-[31px] text-textmuted dark:text-textmuted/50 leading-none search-result-icon"><i
                                                    class="ri-search-line"></i></span>
                                            <button
                                                class="ti-btn ti-btn-primary btn-wave min-w-[6.975rem] !m-0 !rounded-full"
                                                type="button" id="button-addon1"> Search</button>
                                        </div>
                                        <div class="flex gap-2 flex-wrap">
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Designs
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Template
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Dashboard
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Admin
                                                Templates <a href="javascript:void(0);"><i
                                                        class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">
                                                Templates <a href="javascript:void(0);"><i
                                                        class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Admin
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Hosting
                                                Templates <a href="javascript:void(0);"><i
                                                        class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Hosting
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Bootstrap
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <span
                                                class="badge bg-light border font-medium border-defaultborder dark:border-defaultborder/10 text-defaulttextcolor rounded-full">Sales
                                                <a href="javascript:void(0);"><i class="ri-close-line ms-1"></i></a></span>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="text-primary underline font-medium mx-2"> Clear All </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 flex gap-2 justify-between flex-wrap items-center">
                                        <div class="text-textmuted dark:text-textmuted/50">Total of 55,142 results were
                                            found.</div>
                                        <div class="ms-auto flex gap-2 flex-wrap">
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);"
                                                    class="ti-btn ti-btn-sm min-w-[8.125rem] bg-light text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i></a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Alphabets</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">First
                                                            Word</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Numeric</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);"
                                                    class="ti-btn ti-btn-sm min-w-[8.125rem] ti-btn-primary ti-dropdown-toggle hs-dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="true"> Filter By <i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i></a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Alphabets</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">First
                                                            Word</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Numeric</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs tab-style-6 p-0 search-tab sm:gap-2 gap-5 flex bg-transparent flex-wrap pb-5 px-3"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active font-medium rounded-md" role="tab"
                                                data-hs-tab="#search-all"><i class="ri-search-line me-2"></i>All</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link font-medium rounded-md" role="tab"
                                                data-hs-tab="#search-images"><i class="ri-image-line me-2"></i>Images</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link font-medium rounded-md" role="tab"
                                                data-hs-tab="#search-books"><i class="ri-book-line me-2"></i>Books</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link font-medium rounded-md" role="tab"
                                                data-hs-tab="#search-news"><i class="ri-newspaper-line me-2"></i>News</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link font-medium rounded-md" role="tab"
                                                data-hs-tab="#search-videos"><i class="ri-live-line me-2"></i>Videos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="tab-content">
                                <div class="tab-pane p-0 border-0 show active" id="search-all" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);">Beginner</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">
                                                                    http://www.beginnerpackage.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                                class="searched-item-main-link">Introduction to Web
                                                                Development</a></h6>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Learn the
                                                            basics of web development, including HTML, CSS, and
                                                            JavaScript.</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Shop Now</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Top 10
                                                            Picks</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);">Responsive
                                                                        Design</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">http://www.responsivedesigns.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                                class="searched-item-main-link">Best Practices for
                                                                Responsive Web Design</a></h6>
                                                        <span class="block text-textmuted dark:text-textmuted/50"> Explore
                                                            the latest techniques and tools for creating responsive
                                                            websites..</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Browse
                                                            Recipes</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Nutrition
                                                            Tips</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);">JavaScript,
                                                                        Frameworks</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">http://www.javaScriptDevlops.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                                class="searched-item-main-link">Advanced JavaScript
                                                                Frameworks</a></h6>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Dive deep
                                                            into popular JavaScript frameworks like React, Angular, and
                                                            Vue.js..</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Explore
                                                            Destinations</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Travel
                                                            Guides</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);">CSS, Layouts</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">http://www.layoutscss.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                            class="searched-item-main-link">CSS Flexbox Tutorial:</a><span
                                                            class="text-textmuted dark:text-textmuted/50 font-normal text-[13px]">
                                                            Master the CSS Flexbox layout model, get Videos from the
                                                            link.</span></h6>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Explore
                                                            Destinations</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Travel
                                                            Guides</a>
                                                        <div class="ms-auto">
                                                            <span class="avatar avatar-lg flex-shrink-0 ms-auto"> <img
                                                                    src="{{asset('build/assets/images/media/media-15.jpg')}}"
                                                                    alt=""></span>
                                                            <span class="avatar avatar-lg flex-shrink-0 ms-auto"> <img
                                                                    src="{{asset('build/assets/images/media/media-16.jpg')}}"
                                                                    alt=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);">Frontend Development,
                                                                        Debugging</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">http://www.frontenddevelopment.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                                class="searched-item-main-link">Debugging Tips for Frontend
                                                                Developers</a></h6>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Discover
                                                            effective strategies for debugging frontend code and
                                                            troubleshooting common issues.</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Shop Now</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Trend
                                                            Alerts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start justify-between flex-wrap gap-1 mb-3">
                                                        <div>
                                                            <div class="">
                                                                <span class="block font-medium"><a
                                                                        href="javascript:void(0);"> Backend
                                                                        Development</a></span>
                                                                <a href="javascript:void(0);"
                                                                    class="text-primarytint1color">http://www.backenddevlops.com</a>
                                                            </div>
                                                        </div>
                                                        <div class="ti-dropdown hs-dropdown ms-auto">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn bg-light ti-btn-sm btn-wave waves-effect waves-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> View
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                                role="menu">
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Day</a></li>
                                                                <li><a class="ti-dropdown-item"
                                                                        href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="font-semibold mb-1"><a href="javascript:void(0)"
                                                                class="searched-item-main-link">Introduction to Backend
                                                                Development</a></h6>
                                                        <span class="block text-textmuted dark:text-textmuted/50">Get
                                                            started with backend development using Node.js, Python, and
                                                            other server-side technologies.</span>
                                                    </div>
                                                    <div class="flex items-center gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Explore
                                                            Books</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary/10 text-primary text-xs">Author
                                                            Interviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation" class="pagination-style-4 mb-4">
                                        <ul class="ti-pagination mb-0 flex-wrap justify-center">
                                            <li class="page-item disabled">
                                                <a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item "><a class="page-link bg-white dark:!bg-bodybg active"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a aria-label="anchor" class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">16</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link bg-white dark:!bg-bodybg !text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane border-0 p-0 hidden" id="search-images" role="tabpanel">
                                    <div class="box">
                                        <div class="box-body pb-0">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    Beginner</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Beginner In.co</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    Responsive</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Responsive Design</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-42.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    JavaScript</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                JavaScript Devlops</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-43.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    Layoutscss</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Layout SCSS</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-44.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    frontend</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Frontend Development.co</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-45.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs shrink-0">
                                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    backenddevlops</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Backend Solutions</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-46.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    Frontend Dev</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Project innovations.in</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                                    <a href="{{asset('build/assets/images/media/media-60.jpg')}}"
                                                        class="glightbox search-images-card" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image">
                                                        <div class="p-4 text-center bg-light">
                                                            <div class="flex items-center gap-1 justify-center mb-1">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                </div>
                                                                <div
                                                                    class="figure-caption text-[14px] font-medium text-defaulttextcolor">
                                                                    Flawless</div>
                                                            </div>
                                                            <div class="text-xs text-textmuted dark:text-textmuted/50">
                                                                Masters In.co</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="xl:col-span-12 col-span-12 mb-4 text-center">
                                                    <button class="ti-btn bg-info/10 text-info ti-btn-loader mx-auto">
                                                        <span class="me-2">Loading</span>
                                                        <span class="loading"><i
                                                                class="ri-loader-4-line text-[1rem]"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane border-0 p-0 hidden" id="search-books" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">May 10,
                                                                        1902</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> Whispers in the Wind</a>
                                                                </h6>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Set
                                                                    in the Scottish Highlands, this tale follows the
                                                                    forbidden love between a Highland.</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Classic</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Historical</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Adventure</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i>Emma Harper</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">Jun 08,
                                                                        1994</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> The Quantum Enigma</a>
                                                                </h6>
                                                                <span class="block text-textmuted dark:text-textmuted/50">A
                                                                    brilliant physicist stumbles upon a groundbreaking
                                                                    quantum discovery, but soon finds..</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">
                                                                Science Fiction</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Mystery</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Thriller</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i>Dr. James
                                                                Holloway</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">Apr 15,
                                                                        2010</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> Echoes of Eternity</a>
                                                                </h6>
                                                                <span class="block text-textmuted dark:text-textmuted/50">In
                                                                    a world where magic is fading, a young mage must embark
                                                                    on a perilous..</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">
                                                                Epic</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Fantasy</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Adventure</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i>Sophia
                                                                Turner</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">Oct 22,
                                                                        1889</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> Culinary Alchemy</a>
                                                                </h6>
                                                                <span
                                                                    class="block text-textmuted dark:text-textmuted/50">Discover
                                                                    the secrets of transforming simple ingredients
                                                                    into..</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">
                                                                Cooking</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Non-fiction</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Self-help</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i>Gordon
                                                                Meyers</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">Jan 06,
                                                                        1999</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> Shadows of the Mind</a>
                                                                </h6>
                                                                <span class="block text-textmuted dark:text-textmuted/50">A
                                                                    forensic psychologist with a dark past is drawn into a
                                                                    series..</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">
                                                                Psychological Thriller</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Crime</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Suspense</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i> Dr. Lisa
                                                                Bennett</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-start flex-wrap gap-4 justify-between">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <span
                                                                    class="avatar avatar-xl border border-defaultborder dark:border-defaultborder/10">
                                                                    <img src="{{asset('build/assets/images/media/books/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="ms-2">
                                                                <div><span
                                                                        class="text-textmuted dark:text-textmuted/50">Published
                                                                        On</span> - <span class="font-medium mb-0">Feb 16,
                                                                        2003</span></div>
                                                                <h6 class="font-medium my-1 flex items-center"><a
                                                                        href="javascript:void(0);"> The Last Garden</a></h6>
                                                                <span class="block text-textmuted dark:text-textmuted/50">In
                                                                    a future where Earth’s ecosystems are collapsing, a
                                                                    group..</span>
                                                            </div>
                                                        </div>
                                                        <div class="ti-btn-list">
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint1color/10  !me-0 text-primarytint1color">
                                                                <i
                                                                        class="ri-heart-3-line align-middle"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add to favourite
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip !me-0">
                                                                <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm ti-btn-icon bg-primarytint2color/10 text-primarytint2color me-0">
                                                                <i
                                                                class="ri-share-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Featured Book
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-2 justify-between mt-3">
                                                        <div class="popular-tags flex gap-1 flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Dystopian</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Environmental</a>
                                                            <a href="javascript:void(0);"
                                                                class="badge rounded-full bg-primary/10 text-primary">Drama</a>
                                                        </div>
                                                        <a href="javascript:void(0);"><span
                                                                class="font-semibold">Author:</span> <i> Marcus Reed</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 mb-4 flex justify-center">
                                            <button type="button" class="ti-btn bg-info/10 text-info ti-btn-loader"> <span
                                                    class="me-2">Loading</span> <span class="loading"><i
                                                        class="ri-loader-4-line text-[1rem] animate-spin"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane border-0 p-0 hidden" id="search-news" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Quantum Physicists Break New Ground</h6>
                                                        <div class="mb-1"><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            10,Mar 2024 - 3:15PM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            Quantum Research Facility, Geneva</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        In a groundbreaking experiment, quantum physicists have detected a
                                                        previously unknown subatomic particle, challenging.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Stunning Images from NASA's Perseverance Rover
                                                        </h6>
                                                        <div><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            8,Apr 2024 - 9:00AM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            Jezero Crater, Mars</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        NASA's Perseverance rover has captured breathtaking images of the
                                                        Martian landscape, revealing tantalizing clues about the planet's
                                                        geology.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Breakthrough in Cancer Research</h6>
                                                        <div class="mb-1"><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            5,May 2024 - 1:45PM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            Genetech Laboratories</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        Researchers have made a significant breakthrough in cancer treatment
                                                        with the development of a novel therapy that targets
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Chef Julia Rodriguez Launches Global Initiative
                                                        </h6>
                                                        <div class="mb-1"><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            5,Jun 2024 - 11:30AM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            20 countries</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        Renowned chef and humanitarian, Chef Julia Rodriguez, has launched a
                                                        global initiative to combat
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Historic Peace Agreement Signed</h6>
                                                        <div class="mb-1"><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            22,Jul 2024 - 4:20PM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            United Nations</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        In a historic move, long-time rival nations have signed a landmark
                                                        peace agreement.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="mb-2">
                                                        <h6 class="mb-3"> Breakthrough in Renewable Energy</h6>
                                                        <div class="mb-1"><i
                                                                class="ri-calendar-line p-1 bg-primary/10 text-primary !rounded-full leading-none mb-1"></i>
                                                            8,Aug 2024 - 10:00AM</div>
                                                        <div><i
                                                                class="ri-map-pin-line text-primarytint1color p-1 bg-primarytint1color/10 !rounded-full leading-none"></i>
                                                            SolarTech Innovations</div>
                                                    </div>
                                                    <span class="text-textmuted dark:text-textmuted/50">
                                                        Scientists have achieved a major breakthrough in renewable energy
                                                        with the development
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation" class="pagination-style-4 mb-4">
                                        <ul class="ti-pagination mb-0 flex-wrap justify-center">
                                            <li class="page-item disabled">
                                                <a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item "><a class="page-link bg-white dark:!bg-bodybg active"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a aria-label="anchor" class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link bg-white dark:!bg-bodybg" href="javascript:void(0);">16</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link bg-white dark:!bg-bodybg !text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane border-0 p-0 hidden" id="search-videos" role="tabpanel">
                                    <div class="box">
                                        <div class="box-body pb-1">
                                            <div class="grid grid-cols-12 lg:gap-x-6 gap-y-4">
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/HWvHA2FY8Ok?si=Bf-6pyMAcBG-_dR0"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                Valex - Bootstrap 5 Admin & Dashboard HTML Template</div>
                                                        </div>
                                                        <a href="https://www.spruko.com/demo/valex/" target="_blank"
                                                            class="text-xs link-primary underline">https://www.spruko.com/demo/valex/</a>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio  aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/Zx1HjMhcQdE?si=Nhbu6XA2PoyAlYhy"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                Azea - Admin & Dashboard Bootstrap 5 HTML5 Template</div>
                                                        </div>
                                                        <a href="https://spruko.com/demo/azea/" target="_blank"
                                                            class="text-xs link-primary underline">https://spruko.com/demo/azea/</a>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio  aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                XINTRA - HTML Installation & Usage process</div>
                                                        </div>
                                                        <a href="https://spruko.com/demo/xintra/" target="_blank"
                                                            class="text-xs link-primary underline">https://spruko.com/demo/xintra/</a>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio  aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=-GRS_5Dco6Qc5ius"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                Sash - Admin and Dashboard Multipurpose HTML Advanced
                                                                Template</div>
                                                        </div>
                                                        <a href="https://spruko.com/demo/sash/" target="_blank"
                                                            class="text-xs link-primary underline">https://spruko.com/demo/sash/</a>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio  aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                Xintra - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                                        </div>
                                                        <a href="https://spruko.com/demo/xintra/" target="_blank"
                                                            class="text-xs link-primary underline">https://spruko.com/demo/xintra/</a>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <div class="ratio  aspect-video">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/bVRW4Li8inE?si=pOpS9ep2Hn3cGL3y"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="figure-caption text-[13px] font-medium text-defaulttextcolor truncate">
                                                                Zanex - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                                        </div>
                                                        <a href="https://spruko.com/demo/zanex/" target="_blank"
                                                            class="text-xs link-primary underline">https://spruko.com/demo/zanex/</a>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-12 col-span-12 flex justify-center my-3">
                                                    <button type="button" class="ti-btn bg-info/10 text-info ti-btn-loader">
                                                        <span class="me-2">Loading</span> <span class="loading"><i
                                                                class="ri-loader-4-line text-[1rem] animate-spin"></i></span>
                                                    </button>
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
            
        <!-- Search Results JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/search-results.js')


@endsection