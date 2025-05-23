@extends('layouts.master')

@section('styles')
  
        <!-- Glightbox CSS -->
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
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Profile</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box profile-card">
                                <div class="profile-banner-img">
                                    <img src="{{asset('build/assets/images/media/media-3.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="box-body pb-0 relative">
                                    <div class="grid grid-cols-12 sm:gap-x-6 profile-content">
                                        <div class="xl:col-span-3 col-span-12">
                                            <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xxl avatar-rounded online">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                                        <h5 class="font-semibold mb-1">Spencer Robin</h5>
                                                        <span class="block font-medium text-textmuted dark:text-textmuted/50 mb-2">Software Development Manager</span>
                                                        <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50"> <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Hamburg</span> <span><i class="ri-map-pin-line me-1 align-middle"></i>Germany</span> </p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-0 flex-wrap gap-4 p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10"> 
                                                    <div class="border-dashed rounded text-center flex-auto"> 
                                                        <div class="main-card-icon mb-2 primary1">
                                                            <div class="avatar avatar-sm bg-primarytint1color">
                                                                <i class="text-[15px] ti ti-user-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2 justify-center items-end">
                                                            <p class="font-semibold text-xl mb-0">15k</p>
                                                            <p class="mb-1 text-textmuted dark:text-textmuted/50">Followers</p>
                                                        </div>
                                                    </div> 
                                                    <div class="border-dashed rounded text-center flex-auto"> 
                                                        <div class="main-card-icon mb-2 secondary">
                                                            <div class="avatar avatar-sm bg-secondary">
                                                                <i class="text-[15px] ti ti-user-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2 justify-center items-end">
                                                            <p class="font-semibold text-xl mb-0">241</p>
                                                            <p class="mb-1 text-textmuted dark:text-textmuted/50">Following</p>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="p-4 pb-1 flex flex-wrap justify-between">
                                                    <div class="font-medium text-[15px] text-primarytint1color">
                                                        Basic Info :
                                                    </div>
                                                </div>
                                                <div class="box-body border-b border-dashed border-defaultborder dark:border-defaultborder/10 p-0">
                                                    <ul class="ti-list-group list-group-flush !border-0">
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Name :</span><span class="text-textmuted dark:text-textmuted/50">Spencer Robin</span></div>
                                                        </li>
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Designation :</span><span class="text-textmuted dark:text-textmuted/50">Software Development Manager</span></div>
                                                        </li>
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Email :</span><span class="text-textmuted dark:text-textmuted/50">spencer. robin22@example.com</span></div>
                                                        </li>
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Phone :</span><span class="text-textmuted dark:text-textmuted/50">+1 (222) 111 - 57840</span></div>
                                                        </li>
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Experience :</span><span class="text-textmuted dark:text-textmuted/50">10 Years</span></div>
                                                        </li>
                                                        <li class="ti-list-group-item pt-2 border-0">
                                                            <div><span class="font-medium me-2">Age :</span><span class="text-textmuted dark:text-textmuted/50">28</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-1 flex flex-wrap justify-between">
                                                    <div class="font-medium text-[15px] text-primarytint1color">
                                                        Followers :
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                                </div>
                                                <div class="box-body p-0">
                                                    <ul class="ti-list-group list-group-flush !border-0">
                                                        <li class="ti-list-group-item border-0 py-2">
                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <span class="font-medium">Iliana Lilly</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary"> <i class="ri-add-line leading-none align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group-item border-0 py-2">
                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <span class="font-medium">Charlie Edson</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary"> <i class="ri-add-line leading-none align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group-item border-0 py-2">
                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <span class="font-medium">Aurora Reed</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary"> <i class="ri-add-line leading-none align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ti-list-group-item border-0 py-2">
                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-auto">
                                                                    <span class="font-medium">Spencer Robin</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary"> <i class="ri-add-line leading-none align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-9 col-span-12">
                                            <div class="box overflow-hidden border border-defaultborder dark:border-defaultborder/10">
                                                <div class="box-body">
                                                    <ul class="nav nav-tabs tab-style-6 mb-3 p-0 flex bg-white dark:bg-bodybg flex-wrap" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-full text-start rounded-md active" data-hs-tab="#profile-about-tab-pane" type="button" role="tab">About</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-full text-start rounded-md" data-hs-tab="#edit-profile-tab-pane" type="button" role="tab">Edit Profile</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-full text-start rounded-md" data-hs-tab="#timeline-tab-pane" type="button" role="tab">Timeline</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-full text-start rounded-md" data-hs-tab="#gallery-tab-pane" type="button" role="tab">Gallery</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-full text-start rounded-md" data-hs-tab="#friends-tab-pane" type="button" role="tab">Friends</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="profile-tabs">
                                                        <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel">
                                                            <ul class="ti-list-group list-group-flush border rounded-3">
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3"><span class="me-1">&#10024;</span>About Info :</span>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-2">
                                                                        Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field]. 
                                                                    </p>
                                                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                                        Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                                    </p>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Contact Info :</span>
                                                                    <div class="text-textmuted dark:text-textmuted/50">
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primary p-1 bg-primary/10 me-2">
                                                                                <i class="ri-mail-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                            <span class="font-medium text-defaulttextcolor">Email : </span> spencer. robin22@example.com
                                                                        </p>
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint1color p-1 bg-primarytint1color/10 me-2">
                                                                                <i class="ri-map-pin-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                            <span class="font-medium text-defaulttextcolor">Website : </span> www.yourwebsite.com
                                                                        </p>
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint2color p-1 bg-primarytint2color/10 me-2">
                                                                                <i class="ri-building-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                            <span class="font-medium text-defaulttextcolor">Location : </span> City, Country
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="avatar avatar-sm avatar-rounded !text-primarytint3color p-1 bg-primarytint3color/10 me-2">
                                                                                <i class="ri-phone-line align-middle text-[15px]"></i>
                                                                            </span>
                                                                            <span class="font-medium text-defaulttextcolor">Phone : </span> +1 (222) 111 - 57840
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Skills :</span>
                                                                    <div class="w-75">
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Leadership</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Project Management</span>
                                                                        </a>    
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Technical Proficiency</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Communication</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Team Building</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Problem-Solving</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Strategic Thinking</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Decision Making</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Adaptability</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Stakeholder Management</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Conflict Resolution</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">Continuous Improvement</span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Social Media :</span>
                                                                    <div class="flex items-center gap-5 flex-wrap">
                                                                        <div class="flex items-center gap-4 me-2 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary"><i class="ri-github-line text-[1rem]"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="block font-medium text-primay">Github</span>
                                                                                <span class="text-textmuted dark:text-textmuted/50 font-medium">github.com/spruko</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center gap-4 me-2 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primarytint1color"><i class="ri-twitter-x-line text-[1rem]"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="block font-medium text-primay1">Twitter</span>
                                                                                <span class="text-textmuted dark:text-textmuted/50 font-medium">twitter.com/spruko.me</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center gap-4 me-2 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primarytint2color"><i class="ri-linkedin-line text-[1rem]"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="block font-medium text-primay2">Linkedin</span>
                                                                                <span class="text-textmuted dark:text-textmuted/50 font-medium">linkedin.com/in/spruko</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center gap-4 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primarytint3color"><i class="ri-briefcase-line text-[1rem]"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="block font-medium text-primay3">My Portfolio</span>
                                                                                <span class="text-textmuted dark:text-textmuted/50 font-medium">spruko.com/</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0 hidden" id="edit-profile-tab-pane" role="tabpanel"
                                                        tabindex="0">
                                                            <ul class="ti-list-group list-group-flush border rounded-3">
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Personal Info :</span>
                                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">User Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Spencer Robin">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">First Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Spencer">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Last Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Robin">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Designation :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Software Development Manager">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Contact Info :</span>
                                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Email :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="email" class="form-control" placeholder="Placeholder" value="spencer. robin22@example.com">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Phone :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="+1 (222) 111 - 57840">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Website :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="www.yourwebsite .com">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Location :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="City, Country">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">Social Info :</span>
                                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Github :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="github.com/spruko">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Twitter :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com/spruko.me">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Linkedin :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com/in/spruko">
                                                                        </div>
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Portfolio :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="spruko.com/">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">About Info :</span>
                                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">Biographical Info :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <textarea class="form-control" id="text-area" rows="4">Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field].

                                                                                Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item p-4">
                                                                    <span class="font-medium text-[15px] block mb-3">SKILLS :</span>
                                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 items-center">
                                                                        <div class="xl:col-span-3 col-span-12">
                                                                            <div class="leading-none">
                                                                                <span class="font-medium">skills :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-9 col-span-12">
                                                                            <input class="form-control" id="choices-text-preset-values" type="text" value="Leadership, Project Management, Technical Proficiency, Communication, Team Building, Problem-Solving, Strategic Thinking, Decision Making, Adaptability, Stakeholder Management, Conflict Resolution, Continuous Improvement" placeholder="This is a placeholder">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0 hidden" id="timeline-tab-pane" role="tabpanel" 
                                                            tabindex="0">
                                                            <ul class="list-none profile-timeline">
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm bg-primary/10 avatar-rounded profile-timeline-avatar">
                                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-2">
                                                                            <p class="mb-0">
                                                                                <span class="font-semibold">Photos </span>from their recent vacation and writes a caption describing their experience..
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">15,May 2024 - 18:47</span>
                                                                        </div>
                                                                        <p class="profile-activity-media flex mb-3 gap-2 flex-wrap">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="">
                                                                            </a>    
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-2">
                                                                            <p class="mb-0">
                                                                                Friend comments on the post, expressing admiration for the picturesque location a. <span class="text-primary font-medium underline">#Trip-photos</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">18,Dec 2024 - 12:16</span>
                                                                        </div>
                                                                        <p class="text-textmuted dark:text-textmuted/50 mb-3">
                                                                            Asking about the user's favorite part of the trip. emporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-2">
                                                                            <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                                                <span class="text-defaulttextcolor"><span class="text-primarytint1color font-medium">Varun Sonu </span> asking for recommendations on places to visit in the vacation destination</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">26,May 2024 - 12:45</span>
                                                                        </div>
                                                                        <p class="profile-activity-media flex mb-3 gap-2 flex-wrap">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                                            </a>  
                                                                            <span class="text-[11px] text-textmuted dark:text-textmuted/50">432.87KB</span>
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm bg-success avatar-rounded profile-timeline-avatar">
                                                                            K
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-2">
                                                                            <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                                                <span class="text-defaulttextcolor">On a trending news topic, offering their perspective and engaging with other group members' <span class="text-primarytint2color font-medium underline">#viewpoints</span></span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">28,May 2024 - 22:09</span>
                                                                        </div>
                                                                        <p class="profile-activity-media flex mb-2">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-75.jpg')}}" alt="">
                                                                            </a>   
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-1">
                                                                            <p class="text-textmuted dark:text-textmuted/50 mb-0">
                                                                                <span class="text-defaulttextcolor">Reminiscing about a memorable trip they took together and suggesting planning another adventure soon. <span class="font-semibold text-primary3 underline">#Europe</span> trip was a landmark in our lifes!</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">29,May 2024 - 16:42</span>
                                                                        </div>
                                                                        <p class="text-textmuted dark:text-textmuted/50">"Every time, our Europe trip still lies vividly before our eyes."</p>
                                                                        <p class="profile-activity-media flex mb-3 gap-2 flex-wrap">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="m-1" alt="">
                                                                            </a>  
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-60.jpg')}}" class="m-1" alt="">
                                                                            </a>  
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-61.jpg')}}" class="m-1" alt="">
                                                                            </a>  
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                                                        </span>
                                                                        <div class="flex gap-2 flex-wrap mb-1">
                                                                            <p class="mb-1">
                                                                                <span class="font-semibold text-primarytint2color">Invitation</span> to a virtual networking event from a professional connection, expressing interest and RSVPing for attendance.
                                                                            </p>
                                                                            <span class="text-end ms-auto text-[11px] text-textmuted dark:text-textmuted/50">06,Jun 2024 - 08:40</span>
                                                                        </div>
                                                                        <p class="profile-activity-media flex mb-3 gap-2 flex-wrap">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="">
                                                                            </a>    
                                                                        </p>
                                                                        <div class="flex items-end justify-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50 m-1 border border-defaultborder dark:border-defaultborder/10">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0 hidden" id="gallery-tab-pane" role="tabpanel"
                                                            tabindex="0">
                                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-26.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-32.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-31.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-59.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-61.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0 hidden" id="friends-tab-pane" role="tabpanel"
                                                        tabindex="0">
                                                            <div class="grid grid-cols-12 sm:gap-x-6">
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <a href="javascript:void(0);" class="mb-0 font-semibold">Della Jasmine</a>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">dellajasmine117@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Danny Raj</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">dannyraj658@gmail.com</p>
                                                                                    <span class="badge bg-success/10 text-success">UI Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Catalina Keira</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">catalinakeira023@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Priceton Gray</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">pricetongray451@gmail.com</p>
                                                                                    <span class="badge bg-warning/10 text-warning">Team Manager</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Sarah Ruth</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">sarahruth45@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a>  
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Mahira Hose</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">mahirahose9456@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Victoria Gracie</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">victoriagracie@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Amith Gray</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">amithgray132@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                                    <div class="box shadow-none border border-defaultborder dark:border-defaultborder/10">
                                                                        <div class="box-body">
                                                                            <div class="flex items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                                </span>
                                                                                <div class="truncate">
                                                                                    <p class="mb-0 font-semibold">Isha Bella</p>
                                                                                    <p class="w-75 truncate text-xs opacity-70 mb-1 text-textmuted dark:text-textmuted/50">ishabella255@gmail.com</p>
                                                                                    <span class="badge bg-info/10 text-info">Product Designer</span>
                                                                                </div>
                                                                                <div class="ti-dropdown hs-dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="ti-btn bg-secondary/10 text-secondary ti-btn-icon ti-btn-sm btn-wave ti-dropdown-toggle hs-dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu"> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-footer text-center p-4">
                                                                            <div class="flex gap-2 flex-wrap justify-center">
                                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave me-0">View Profile</button>
                                                                                <button class="ti-btn ti-btn-sm bg-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-12 col-span-12">
                                                                    <div class="text-center">
                                                                        <button class="ti-btn ti-btn-soft-primary btn-wave">Show All</button>
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
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->
       
@endsection

@section('scripts')
          
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

        <!-- Internal Profile JS -->
        @vite('resources/assets/js/profile.js')
        
    
@endsection