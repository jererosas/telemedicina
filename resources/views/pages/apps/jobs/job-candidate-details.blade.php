@extends('layouts.master')

@section('styles')
  
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Candidate Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Candidate Details</h1>
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
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="box job-candidate-details">
                                <div class="candidate-bg-shape primary"></div>
                                <div class="box-body pt-[3rem]">
                                    <div class="mb-3 leading-none mt-6">
                                        <span class="avatar avatar-xxl avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="!rounded-full img-fluid shadow"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="flex gap-2 flex-wrap mb-3">
                                        <div class="flex-auto">
                                            <h6 class="mb-1 font-semibold"><a href="javascript:void(0);"> Samantha
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <span class="text-success text-[1rem]">
                                                            <i class="ri-check-line"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content !border-black py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                                Verified candidate
                                                            </span>
                                                        </span>
                                                    </div>
                                                </a></h6>
                                            <p class="mb-0 text-textmuted dark:text-textmuted/50">UI/UX Designer</p>
                                            <div
                                                class="flex flex-wrap gap-2 items-center text-xs text-textmuted dark:text-textmuted/50">
                                                <p class="mb-0">Ratings : </p>
                                                <div class="min-w-fit-content ms-2">
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-half-fill"></i></span>
                                                </div>
                                                <a href="javascript:void(0);"
                                                    class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                    <span>(245)</span>
                                                    <span>Ratings</span>
                                                </a>
                                            </div>
                                            <div class="flex text-[14px] mt-3 gap-2 flex-wrap">
                                                <div>
                                                    <p class="mb-1"><i
                                                            class="ri-map-pin-line me-2 text-textmuted dark:text-textmuted/50"></i>Silicon
                                                        Valley, CA</p>
                                                    <p class="mb-0"><i
                                                            class="ri-briefcase-line me-2 text-textmuted dark:text-textmuted/50"></i>3
                                                        Years Experience</p>
                                                </div>
                                                <div class="sm:ms-3">
                                                    <p class="mb-1"><i
                                                            class="ri-currency-line me-2 text-textmuted dark:text-textmuted/50"></i>Annual
                                                        Pay : <span class="font-medium">$55,000</span> - <span
                                                            class="font-medium">$80,000</span></p>
                                                    <p class="mb-0"><i
                                                            class="ri-graduation-cap-line me-2 text-textmuted dark:text-textmuted/50"></i>Graduate
                                                    </p>
                                                </div>
                                                <div class="sm:ms-3">
                                                    <p class="mb-1"><i
                                                            class="ri-mail-line me-2 text-textmuted dark:text-textmuted/50"></i>Mail
                                                        : <span class="font-medium">samantha@mail.com</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-list ms-auto">
                                            <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-primary rounded-full btn-wave waves-effect"><i
                                                    class="ri-download-cloud-line me-1"></i> Download CV</a>
                                            <a href="javascript:void(0);"
                                                class="ti-btn bg-primarytint1color/10 text-primarytint1color rounded-full btn-wave waves-effect waves-light align-middle">
                                                <i class="ri-heart-line leading-none my-auto align-middle"></i> Add to
                                                wishlist
                                            </a>
                                            <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon bg-secondary/10 text-secondary rounded-full btn-wave waves-effect waves-light align-middle me-0">
                                                <i class="ri-share-line text-lg mb-1 leading-none my-auto align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 items-center flex-wrap">
                                        <h6 class="mb-0">Availability:</h6>
                                        <div class="popular-tags flex gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                                class="badge rounded-full text-[11px] bg-info/10 text-info"><i
                                                    class="ri-remote-control-line me-1"></i>Full Time</a>
                                            <a href="javascript:void(0);"
                                                class="badge rounded-full text-[11px] bg-danger/10 text-danger"><i
                                                    class="ri-time-line me-1"></i>Immediate Joinee</a>
                                            <a href="javascript:void(0);"
                                                class="badge rounded-full text-[11px] bg-primary/10 text-primary"><i
                                                    class="ri-calendar-line me-1"></i>Flexible Schedule</a>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="ms-auto text-secondary px-2 py-1 rounded-full text-xs bg-secondary/10"><i
                                                class="ri-chat-1-line me-1"></i> Message Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Skills
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="popular-tags flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full bg-primarytint2color/10 text-primarytint2color">HTML</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full bg-primary/10 text-primary">CSS</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full bg-info/10 text-info">Javascript</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full bg-secondary/10 text-secondary">Angular</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-full bg-success/10 text-success">React</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Languages
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <p class="mb-0 text-[14px]"><span class="font-medium me-2">Known :
                                                </span>Hindi(Fluent), English, Spanish(Intermediate), Telugu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Candidate Profile Information
                                    </div>
                                </div>
                                <div class="box-body p-0 candidate-edu-timeline">
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <h5 class="font-medium text-[17px] flex items-center gap-2"><span
                                                class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                    class="ri-briefcase-4-line text-[13px]"></i></span> Career Objective :
                                        </h5>
                                        <div class="ms-4 ps-5">
                                            <p class="opacity-90">Passionate and creative UI/UX designer with a strong
                                                portfolio and proven track record in designing intuitive user interfaces.
                                                Committed to delivering high-quality user experiences through user-centric
                                                design principles.</p>
                                            <p class="mb-0 opacity-90">Seeking a challenging role in a dynamic company where
                                                I can contribute my skills in UI/UX design to create innovative and
                                                user-friendly digital products.</p>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xl:col-span-7 col-span-12">
                                                <h5 class="font-medium text-[17px] flex items-center gap-2"><span
                                                        class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                            class="ri-graduation-cap-line text-[13px]"></i></span> Education
                                                    :</h5>
                                                <div class="ms-4 ps-5">
                                                    <p class="font-medium text-[14px] mb-0">Bachelor in Computer Science</p>
                                                    <div class="flex gap-2 mb-1">
                                                        <p class="mb-0">Dwayne University</p>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-xs"></i> Nellore</p>
                                                    </div>
                                                    <p class="mb-3 text-textmuted dark:text-textmuted/50"> (2020 Mar - 2024
                                                        Apr)</p>
                                                    <p class="font-medium text-[14px] mb-0">Intermediate (MPC)</p>
                                                    <div class="flex gap-2 mb-1">
                                                        <p class="mb-0">Sprect College</p>
                                                        <p class="mb-0 text-textmuted dark:text-textmuted/50"><i
                                                                class="ri-map-pin-line text-xs"></i> Warangal</p>
                                                    </div>
                                                    <p class="mb-0 text-textmuted dark:text-textmuted/50"> (2017 Mar - 2020
                                                        Apr)</p>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-5 col-span-12">
                                                <h5 class="font-medium text-[17px] flex items-center gap-2"><span
                                                        class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                            class="ri-graduation-cap-line text-[13px]"></i></span>
                                                    Certifications :</h5>
                                                <div class="ms-4 ps-5">
                                                    <p class="font-medium text-[14px] mb-0">Web Development (3 Months)</p>
                                                    <p class="mb-4">EMC Solutions Pvt Ltd</p>
                                                    <p class="font-medium text-[14px] mb-0">Python Development (1 Month)</p>
                                                    <p class="mb-0">Dabre Services Pvt Ltd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xl:col-span-7 col-span-12">
                                                <h5 class="font-medium text-[17px] flex items-center gap-2"><span
                                                        class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                            class="ri-article-line text-[13px]"></i></span> Publications :
                                                </h5>
                                                <div class="ms-3">
                                                    <ol class="ti-list-group !border-0 list-bullets">
                                                        <li class="!border-0 py-1"><span class="font-medium">“The Evolution
                                                                of User Experience Design,”</span> UX Design Journal, March
                                                            2023</li>
                                                        <li class="!border-0 py-1"><span class="font-medium">“Designing for
                                                                Accessibility in Web Applications,”</span> A11y Matters,
                                                            June 2023</li>
                                                        <li class="!border-0 py-1"><span class="font-medium">“Innovations in
                                                                Mobile UI Design,”</span> Mobile Design Magazine, December
                                                            2023</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-5 col-span-12">
                                                <h5 class="font-medium text-[17px] flex items-center gap-2"><span
                                                        class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                            class="ri-movie-2-line text-[13px]"></i></span> Activities and
                                                    Interests :</h5>
                                                <div class="ms-3">
                                                    <ol class="ti-list-group !border-0 list-bullets">
                                                        <li class="!border-0 py-1">Active participant in local UI/UX design
                                                            meetups</li>
                                                        <li class="!border-0 py-1">Volunteer at community-driven design
                                                            workshops</li>
                                                        <li class="!border-0 py-1">Passionate about exploring new design
                                                            trends</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="font-medium text-[17px] mb-4 flex items-center gap-2"><span
                                                class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                    class="ri-user-location-line text-[13px]"></i></span> References :</h5>
                                        <div class="grid grid-cols-12 sm:gap-x-6 ms-4">
                                            <div class="xl:col-span-7 col-span-12">
                                                <p class="mb-4"><span class="font-medium">Name : </span> Nicole Chiu</p>
                                                <p class="mb-4"><span class="font-medium">Designation : </span> Software Developer</p>
                                                <p class="mb-0"><span class="font-medium mb-0">Company Name : </span>
                                                    InnovateZ Solutions</p>
                                            </div>
                                            <div class="xl:col-span-5 col-span-12">
                                                <p class="mb-4"><span class="font-medium">Mobile : </span> +91 7865443679</p>
                                                <p class="mb-4"><span class="font-medium">Email : </span> nchiu@email.com</p>
                                                <p class="mb-0"><span class="font-medium">Location : </span> Hyderabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Experience Overview
                                    </div>
                                </div>
                                <div class="box-body p-0 candidate-edu-timeline">
                                    <div class="p-4">
                                        <h5 class="font-medium text-[17px] flex items-center gap-2 mb-3"><span
                                                class="avatar avatar-rounded bg-primary avatar-sm"><i
                                                    class="ri-briefcase-4-line text-[13px]"></i></span> Experience :</h5>
                                        <div class="ms-4 ps-5">
                                            <p class="font-medium text-[14px] mb-0">UI/UX Designer (2019 Mar - Present)</p>
                                            <div class="flex gap-2">
                                                <p>InnovateZ Solutions</p>
                                                <p class="mb-0 text-xs text-textmuted dark:text-textmuted/50"><i
                                                        class="ri-map-pin-line text-xs"></i> Kondapur, Hyderabad</p>
                                            </div>
                                            <p class="font-medium mb-2">Responsibilities :</p>
                                            <ol class="ti-list-group !border-0 list-bullets">
                                                <li class="!border-0 py-1">Lead the design efforts for innovative and
                                                    user-friendly interfaces across multiple projects.</li>
                                                <li class="!border-0 py-1">Collaborate with cross-functional teams to
                                                    translate business requirements into intuitive designs.</li>
                                                <li class="!border-0 py-1">Conduct user research, usability testing, and
                                                    gather feedback to iterate designs.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Tools Used
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span
                                        class="avatar me-2 avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                    </span>
                                    <span
                                        class="avatar me-2 avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                    </span>
                                    <span
                                        class="avatar me-2 avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                    </span>
                                    <span
                                        class="avatar me-2 avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                    </span>
                                    <span
                                        class="avatar me-2 avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                    </span>
                                    <span
                                        class="avatar avatar-rounded bg-primary/10 border-primary/[0.25] shadow-sm border p-2">
                                        <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="font-medium mb-3">Related Profiles</h6>
                                <div class="swiper swiper-vertical overflow-hidden swiper-related-profiles">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div
                                                class="box shadow-none border dark:border-defaultborder/10  border-defaultborder">
                                                <div class="box-body">
                                                    <div class="float-end">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a href="javascript:void(0);"
                                                                class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                                <span><i
                                                                        class="ri-download-cloud-line text-[14px]"></i></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Download CV
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a href="javascript:void(0);"
                                                                class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                                <span><i class="ri-heart-line text-[14px]"></i></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Add to Wishlist
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-3 items-center flex-wrap gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                                    alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-1 flex items-center"><a
                                                                    href="{{url('job-candidate-details')}}"> Samantha <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a></h6>
                                                            <div class="flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">UX Designer</a>
                                                                <p
                                                                    class="mb-0 text-xs text-textmuted dark:text-textmuted/50">
                                                                    <i class="ri-map-pin-line text-[11px]"></i> Canada
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                                <p class="text-xs mb-0">Ratings : </p>
                                                                <div class="min-w-fit-content ms-2">
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-half"></i></span>
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                    class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                                    <span>(24)</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                                class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                                class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                    </div>
                                                    <div class="flex items-center flex-wrap gap-4 xxl:flex-nowrap">
                                                        <div>
                                                            <p class="mb-1 grow"><span
                                                                    class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                                    :</span> <span class="font-medium"> $55K</span> -
                                                                <span class="font-medium"> $80K</span>
                                                            </p>
                                                            <p class="mb-0"><span
                                                                    class="text-textmuted dark:text-textmuted/50"> Languages
                                                                    :</span> <span class="font-medium"> English
                                                                </span></p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="ti-btn ti-btn-primary">View Profile<i
                                                                    class="ri-arrow-right-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="box shadow-none border dark:border-defaultborder/10  border-defaultborder">
                                                <div class="box-body">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);"
                                                            class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Download CV" title="Download CV"><span><i
                                                                    class="ri-download-cloud-line text-[14px]"></i></span></a>
                                                        <a href="javascript:void(0);"
                                                            class="avatar avatar-rounded avatar-sm bg-info/10 !text-info"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Add to Wishlist" title="Add to Wishlist"><span><i
                                                                    class="ri-heart-line text-[14px]"></i></span></a>
                                                    </div>
                                                    <div class="flex mb-3 items-center flex-wrap gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}"
                                                                    alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-1 flex items-center"><a
                                                                    href="{{url('job-candidate-details')}}"> Michael <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a></h6>
                                                            <div class="flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">UI Developer</a>
                                                                <p
                                                                    class="mb-0 text-xs text-textmuted dark:text-textmuted/50">
                                                                    <i class="ri-map-pin-line text-[11px]"></i> New York
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                                <p class="text-xs mb-0">Ratings : </p>
                                                                <div class="min-w-fit-content ms-2">
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-half"></i></span>
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                    class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                                    <span>(189)</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                                class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                                class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                    </div>
                                                    <div class="flex items-center flex-wrap gap-4 xxl:flex-nowrap">
                                                        <div>
                                                            <p class="mb-1 grow"><span
                                                                    class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                                    :</span> <span class="font-medium"> $65K</span> -
                                                                <span class="font-medium"> $90K</span>
                                                            </p>
                                                            <p class="mb-0"><span
                                                                    class="text-textmuted dark:text-textmuted/50"> Languages
                                                                    :</span> <span class="font-medium"> English</span></p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                                Profile<i class="ri-arrow-right-line"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="box shadow-none border dark:border-defaultborder/10  border-defaultborder">
                                                <div class="box-body">
                                                    <div class="float-end">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a href="javascript:void(0);"
                                                                class="avatar avatar-rounded avatar-sm bg-info/10 !text-info">
                                                                <span><i
                                                                        class="ri-download-cloud-line text-[14px]"></i></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Download CV
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                            <a href="javascript:void(0);"
                                                                class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger">
                                                                <span><i class="ri-heart-line text-[14px]"></i></span>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Add to Wishlist
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex mb-3 items-center flex-wrap gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}"
                                                                    alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-1 flex items-center"><a
                                                                    href="{{url('job-candidate-details')}}"> Emily <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a></h6>
                                                            <div class="flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">Web Designer</a>
                                                                <p
                                                                    class="mb-0 text-xs text-textmuted dark:text-textmuted/50">
                                                                    <i class="ri-map-pin-line text-[11px]"></i>
                                                                    LosAngeles,CA
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                                <p class="text-xs mb-0">Ratings : </p>
                                                                <div class="min-w-fit-content ms-2">
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-half"></i></span>
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                    class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                                    <span>(20)</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                                class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                                class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                    </div>
                                                    <div class="flex items-center flex-wrap gap-4 xxl:flex-nowrap">
                                                        <div>
                                                            <p class="mb-1 grow"><span
                                                                    class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                                    :</span> <span class="font-medium"> $50K</span> -
                                                                <span class="font-medium"> $70K</span>
                                                            </p>
                                                            <p class="mb-0"><span
                                                                    class="text-textmuted dark:text-textmuted/50"> Languages
                                                                    :</span> <span class="font-medium"> English</span></p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                                Profile<i class="ri-arrow-right-line"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="box shadow-none border dark:border-defaultborder/10  border-defaultborder">
                                                <div class="box-body">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);"
                                                            class="avatar avatar-rounded avatar-sm bg-danger/10 !text-danger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Download CV" title="Download CV"><span><i
                                                                    class="ri-download-cloud-line text-[14px]"></i></span></a>
                                                        <a href="javascript:void(0);"
                                                            class="avatar avatar-rounded avatar-sm bg-info/10 !text-info"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Add to Wishlist" title="Add to Wishlist"><span><i
                                                                    class="ri-heart-line text-[14px]"></i></span></a>
                                                    </div>
                                                    <div class="flex mb-3 items-center flex-wrap gap-2 xxl:flex-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}"
                                                                    alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-medium mb-1 flex items-center"><a
                                                                    href="{{url('job-candidate-details')}}"> Joseph <div
                                                                class="hs-tooltip ti-main-tooltip">
                                                                <span class="text-primary text-[13px]">
                                                                    <i class="ri-verified-badge-fill"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Verified candidate
                                                                    </span>
                                                                </span>
                                                            </div></a></h6>
                                                            <div class="flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">UI Developer</a>
                                                                <p
                                                                    class="mb-0 text-xs text-textmuted dark:text-textmuted/50">
                                                                    <i class="ri-map-pin-line text-[11px]"></i> New York,NY
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="flex items-center text-xs text-textmuted dark:text-textmuted/50 flex-wrap">
                                                                <p class="text-xs mb-0">Ratings : </p>
                                                                <div class="min-w-fit-content ms-2">
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-fill"></i></span>
                                                                    <span class="text-warning"><i
                                                                            class="bi bi-star-half"></i></span>
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                    class="ms-1 min-w-fit-content text-textmuted dark:text-textmuted/50">
                                                                    <span>(35)</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primary/10 text-primary"><i
                                                                class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge rounded-full text-[11px] border border-primarytint1color/10 text-primarytint1color"><i
                                                                class="ri-remote-control-line me-1"></i> Remote Work</a>

                                                    </div>
                                                    <div class="flex items-center flex-wrap gap-4 xxl:flex-nowrap">
                                                        <div>
                                                            <p class="mb-1 grow"><span
                                                                    class="text-textmuted dark:text-textmuted/50">Annual Pay
                                                                    :</span> <span class="font-medium"> $65K</span> -
                                                                <span class="font-medium"> $90K</span>
                                                            </p>
                                                            <p class="mb-0"><span
                                                                    class="text-textmuted dark:text-textmuted/50"> Languages
                                                                    :</span> <span class="font-medium"> English</span></p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary">View
                                                                Profile<i class="ri-arrow-right-line"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Personal Information
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Full Name</span>
                                                    </td>
                                                    <td>: Iliana Lilly</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Email</span>
                                                    </td>
                                                    <td>: brendra@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">D.O.B</span>
                                                    </td>
                                                    <td>: 13 Jan 2008</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Gender</span>
                                                    </td>
                                                    <td>: Female</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Age</span>
                                                    </td>
                                                    <td>: 35</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Mobile </span>
                                                    </td>
                                                    <td>: +91 7865343874</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Marital Status </span>
                                                    </td>
                                                    <td>: Unmarried</td>
                                                </tr>
                                                <tr>
                                                    <td class="!w-[50%]">
                                                        <span class="font-medium">Address </span>
                                                    </td>
                                                    <td>: Akshya Nagar 1st Block 1st Cross, Rammurthy nagar,
                                                        Bangalore-560016</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0">
                                    <div class="flex items-center">
                                        <p class="text-[15px] mb-0 me-4 font-medium">Social :</p>
                                        <div class="btn-list mb-0">
                                            <button
                                                class="ti-btn btn-sm ti-btn-icon ti-btn-soft-primary btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-facebook-line"></i>
                                            </button>
                                            <button
                                                class="ti-btn btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-twitter-x-line"></i>
                                            </button>
                                            <button
                                                class="ti-btn btn-sm ti-btn-icon ti-btn-soft-warning text-warning btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-instagram-line"></i>
                                            </button>
                                            <button
                                                class="ti-btn btn-sm ti-btn-icon ti-btn-soft-success btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-github-line"></i>
                                            </button>
                                            <button
                                                class="ti-btn btn-sm ti-btn-icon ti-btn-soft-danger btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-youtube-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="font-medium mb-3">Subscribe to Job Alerts</h6>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control !border-s" placeholder="Your Email Address"
                                            aria-label="job-email" aria-describedby="job-subscribe">
                                        <button class="ti-btn ti-btn-primary !m-0" type="button"
                                            id="job-subscribe">Subscribe</button>
                                    </div>
                                    <label class="form-check-label">
                                        By subscribing, you accept our <a href="javascript:void(0);"
                                            class="text-success"><u>privacy policy</u></a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Candidate Details JS -->
        @vite('resources/assets/js/job-candidate-details.js')
        

@endsection