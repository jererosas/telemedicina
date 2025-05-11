@extends('layouts.landing-master')

@section('styles')
  

@endsection

@section('content')

        <!-- Start::main-content -->
        <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">
            
            <!-- Start::Home Content -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container">
                        <div class="grid grid-cols-12 gap-x-6 pt-3">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-8 col-span-12">
                                <div class="pt-lg-5 pb-4">
                                    <div class="mb-3">
                                        <h6 class="font-medium text-white opacity-90">Optimized and Accessible</h6>
                                    </div>
                                    <p class="landing-banner-heading mb-3 !text-white">Refined Design, Elevated User
                                        Experience:
                                        Explore <span class="font-semibold text-warning">Xintra</span> Template.</p>
                                    <div class="text-base mb-[3rem] text-white opacity-70">An intuitive admin template
                                        designed for efficiency, featuring a clean and modern interface that simplifies
                                        management tasks and enhances productivity.
                                    </div>
                                    <div class="flex items-center flex-wrap gap-2">
                                        <a href="{{url('index')}}" class="m-1 ti-btn ti-btn-lg bg-white/10 text-white">
                                            View Demos
                                            <i class="ri-eye-line ms-2 align-middle"></i>
                                        </a>
                                        <a href="{{url('index')}}"
                                            class="m-1 ti-btn ti-btn-lg bg-primarytint1color text-white btn-wave waves-effect waves-light">
                                            Discover More
                                            <i class="ri-arrow-right-line ms-2 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-4 col-span-12 my-auto">
                                <div
                                    class="text-end landing-main-image landing-heading-img flex justify-end mb-[2.5rem]">
                                    <img src="{{asset('build/assets/images/media/landing/1.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End::Home Content -->

            <!-- Start:: Section-2 -->
            <section class="section" id="about">
                <div class="container relative">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">GLANCE</span>
                        </p>
                        <h4 class="!font-semibold mb-1 mt-4">Why you choose us ?</h4>
                        <div class="">
                            <div class="xl:col-span-7 col-span-12">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-[3rem] font-normal">Our
                                    mission is to support you in achieving
                                    your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-4 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M208,40H48A24,24,0,0,0,24,64V176a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V64A24,24,0,0,0,208,40Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8Zm-48,48a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,224Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Responsive and Accessible</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing
                                        elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);"
                                        class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint1color/10 svg-primarytint1color avatar-rounded border-4 border-primarytint1color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M224,48V96a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h28.69L182.06,73.37a79.56,79.56,0,0,0-56.13-23.43h-.45A79.52,79.52,0,0,0,69.59,72.71,8,8,0,0,1,58.41,61.27a96,96,0,0,1,135,.79L208,76.69V48a8,8,0,0,1,16,0ZM186.41,183.29a80,80,0,0,1-112.47-.66L59.31,168H88a8,8,0,0,0,0-16H40a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V179.31l14.63,14.63A95.43,95.43,0,0,0,130,222.06h.53a95.36,95.36,0,0,0,67.07-27.33,8,8,0,0,0-11.18-11.44Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Continuous Updates and Support</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing
                                        elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);"
                                        class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right  text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color avatar-rounded border-4 border-primarytint2color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Design and Customization</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing
                                        elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);"
                                        class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right  text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section section-bg" id="expectations">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 mx-0">
                        <div class="xl:col-span-5 col-span-12">
                            <div class="home-proving-image">
                                <img src="{{asset('build/assets/images/media/landing/2.png')}}" alt=""
                                    class="img-fluid] about-image hidden xl:block">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                        <div class="xl:col-span-7 col-span-12 my-auto">
                            <div class="heading-section text-start mb-4">
                                <p class="text-xs font-medium text-start text-success mb-1"><span
                                        class="landing-section-heading text-primary">ABOUT US</span>
                                </p>
                                <h4 class="mt-3 !font-semibold mb-2">Our Commitment!</h4>
                                <div class="heading-description text-[14px]">Welcome to Xintra, our commitment is more
                                    than a statement; it's the cornerstone of everything we do.We are dedicated to
                                    design, ensuring that every interaction, project, and outcome reflects.</div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6 gap-y-3 mb-0">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primary inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Years of Experience and Reputation:</strong> We bring 4+ years
                                                of experience, backed by a solid reputation for excellence.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i
                                                class="ri-focus-2-fill align-middle text-primarytint1color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Professional Team:</strong> Our team consists of experienced and
                                                professional individuals dedicated to delivering top-notch service.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i
                                                class="ri-focus-2-fill align-middle text-primarytint2color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Client-Centric Approach:</strong> We understand that every
                                                client is unique, so we tailor our services to meet your specific needs
                                                and preferences.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primarytint3color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>24/7 Support:</strong> We provide round-the-clock support, 365
                                                days a year, ensuring that assistance is always available when you need
                                                it most.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class="section" id="services">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">SERVICES</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">What You Get</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Nemo enim
                                    ipsam voluptatem quia voluptas sit
                                    aspernatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div
                                            class="p-2 border inline-block border-primary/20 bg-primary/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Responsive Design</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ensures the template is
                                        optimized for various screen sizes and devices, enhancing usability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <div
                                                class="p-2 border inline-block border-primarytint1color/10 bg-primarytint1color/10 rounded-full">
                                                <span
                                                    class="avatar avatar-lg avatar-rounded bg-primarytint1color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Pre-built Components</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ready-made UI components such
                                        as buttons, forms, tables, charts, and modals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <div
                                                class="p-2 border inline-block border-primarytint2color/10 bg-primarytint2color/10 rounded-full">
                                                <span
                                                    class="avatar avatar-lg avatar-rounded bg-primarytint2color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="#000000" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Customization Options</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ability to customize colors,
                                        fonts, layouts, and other visual elements to match your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div
                                            class="p-2 border inline-block border-primarytint3color/10 bg-primarytint3color/10 rounded-full">
                                            <span
                                                class="avatar avatar-lg avatar-rounded bg-primarytint3color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Documentation</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Comprehensive documentation
                                        that guides you through installation, customization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div
                                            class="p-2 border inline-block border-secondary/10 bg-secondary/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-secondary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Support</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Access to support forums,
                                        ticket systems, or direct support from the template provider.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-info/10 bg-info/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-info svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Updates and Maintenance</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Regular updates to ensure
                                        compatibility with the latest web technologies and bug fixes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div
                                            class="p-2 border inline-block border-warning/10 bg-warning/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-warning svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Multiple Layout</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Different layout styles
                                        (sidebar navigation, top navigation) to suit different types of applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div
                                            class="p-2 border inline-block border-success/10 bg-success/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-success svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Performance Optimization</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Code optimized for
                                        performance, including lazy loading of assets, CSS and JS files.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class="section landing-Features" id="features">
                <div class="container text-center">
                    <div class=" justify-center">
                        <div class="">
                            <div class="heading-section text-center mb-0">
                                <p class="text-xs font-medium text-success mb-1"><span
                                        class="landing-section-heading landing-section-heading-dark text-white">FEATURES</span>
                                </p>
                                <h4 class="text-white text-center mt-3 font-medium">Our Features</h4>
                                <div class="text-[14px] text-white text-center opacity-80 mb-4">Ullamco ea commodo.Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
                                    laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                            </div>
                        </div>
                        <div class="my-auto">
                            <div
                                class="flex items-center justify-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/1.png')}}" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/2.png')}}" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/4.png')}}" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/5.png')}}" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/6.png')}}" alt="img"
                                        class="border-0 shadow-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            <section class="section" id="team">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">OUR TEAM</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">The people who make our organization Successful</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Our team
                                    is made up of real people who are
                                    passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape primary"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-primary">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primary font-medium">Director
                                        </p>
                                        <h6 class="mb-3 font-semibold">Hadley Kylin</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i
                                                    class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                    class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                    class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                    class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape teal"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-teal">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint1color font-medium">
                                            Board Director</p>
                                        <h6 class="mb-3 font-semibold">Owen Foster</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i
                                                class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape success"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-success">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint2color font-medium">
                                            Creative Director</p>
                                        <h6 class="mb-3 font-semibold">Stephen Roy</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i
                                                class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape orange"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-orange">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint3color font-medium">
                                            Board Director</p>
                                        <h6 class="mb-3 font-semibold">Jasmine Della</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i
                                                class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i
                                                class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">PRICING</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">Plans that flex with your needs.</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Stay agile
                                    with plans that seamlessly adjust to your changing requirements, ensuring you always
                                    have the flexibility you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12" id="convertable-pricing">
                            <div class="flex justify-center mb-4">
                                <div class="switcher-box">
                                    <span class="pricing-time-span">Monthly</span>
                                    <div class="switcher-pricing text-center">
                                        <input type="checkbox" class="pricing-toggle">
                                    </div>
                                    <span class="pricing-time-span">Annually <span
                                            class="badge leading-none bg-primarytint2color">20% off</span></span>
                                </div>
                            </div>
                            <div class="tab-content show" id="monthly1">
                                <div class="grid grid-cols-12">
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                  <div class="xl:col-span-12 lg:col-span-8 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-6 border-b border-dashed border-white/10">
                                                    <h6 class="!font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-1 !font-semibold block text-white">$22.89<span
                                                            class="text-xs font-medium ms-1 opacity-80"> / Month</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful
                                                        tools tailored for seasoned users, designed to take your skills to
                                                        the next level.</span>
                                                </div>
                                                <div class="box-body !p-6 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="op-5 text-xs font-medium">30 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="op-5 text-xs font-medium">120 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg bg-white grid w-full btn-wave text-black">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-4 col-xxl-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div
                                                    class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="!font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-1 !font-semibold block">$8.5<span
                                                            class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span
                                                        class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover
                                                        the vital features that create an enchanting foundation for a
                                                        magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span
                                                                    class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">12
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">45
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div
                                                    class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="!font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-1 !font-semibold block">$29.99<span
                                                            class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span
                                                        class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate
                                                        to the highest standards with unparalleled excellence and exclusive
                                                        top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span
                                                                    class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                 <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px] ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">60
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                </div>
                            </div>
                            <div class="tab-content" id="yearly1">
                                <div class="grid grid-cols-12">
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                  <div class="xl:col-span-12 lg:col-span-8 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div
                                            class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-6 border-b border-dashed border-white/10">
                                                    <h6 class="!font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-1 !font-semibold block text-white">$1,999.89<span
                                                            class="text-xs font-medium ms-1 opacity-80"> / Annum</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful
                                                        tools tailored for seasoned users, designed to take your skills to
                                                        the next level.</span>
                                                </div>
                                                <div class="box-body !p-6 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="op-5 text-xs font-medium">90 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="op-5 text-xs font-medium">300 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg bg-white grid w-full btn-wave text-black">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="!font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-1 !font-semibold block">$899.96<span
                                                            class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span
                                                        class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover
                                                        the vital features that create an enchanting foundation for a
                                                        magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span
                                                                    class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">40
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">180
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="!font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-1 !font-semibold block">$589.99<span
                                                            class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span
                                                        class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate
                                                        to the highest standards with unparalleled excellence and exclusive
                                                        top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span
                                                                    class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span
                                                                            class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">250
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                    <i
                                                                        class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span
                                                                    class="text-textmuted dark:text-textmuted/50 text-xs font-medium">320
                                                                    Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button"
                                                        class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section" id="faqs">
                <div class="container text-center">
                    <p class="text-xs font-medium text-success mb-1"><span
                            class="landing-section-heading text-primary">F.A.Q 's</span>
                    </p>
                    <h4 class="!font-semibold mt-3 mb-2">Frequently asked questions ?</h4>
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xl:col-span-7 col-span-12">
                            <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">We have shared
                                some of the most frequently asked
                                questions to help you out.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 text-start">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                        id="accordionFAQ1">
                                        <div class="hs-accordion-group">
                                            <div class="hs-accordion active bg-white dark:bg-bodybg  border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm  dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-one">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-one">
                                                    Where can I subscribe to your newsletter?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-one"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-one">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-two">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-two">
                                                    Where can in edit my address?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-two"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-two">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-twenty">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-three">
                                                    What are your opening hours?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-three"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-twenty">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-thirty">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-four">
                                                    Do I have the right to return an item?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-four"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-three">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-five">
                                                    General Terms &amp; Conditions (GTC)
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-five"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-three">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-four">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-six">
                                                    Do I need to create an account to make an order?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-six"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-four">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                        id="accordionFAQ2">
                                        <div class="hs-accordion-group">
                                            <div class="hs-accordion active bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-five">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-seven">
                                                    General Terms &amp; Conditions (GTC)
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-seven"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-five">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-six">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-eight">
                                                    Do I need to create an account to make an order?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-eight"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-six">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-seven">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-nine">
                                                    Where can I subscribe to your newsletter?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-nine"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-seven">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-eight">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-ten">
                                                    Where can in edit my address?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-ten"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-eight">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-nine">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-eleven">
                                                    What are your opening hours?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-eleven"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-nine">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-ten">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-twelve">
                                                    Do I have the right to return an item?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-twelve"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-ten">
                                                    <div class="p-5">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>This is the first item's accordion body.</strong> It
                                                            is shown by
                                                            default, until the collapse plugin adds the appropriate
                                                            classes that we
                                                            use to style each element. These classes control the overall
                                                            appearance,
                                                            as well as the showing and hiding via CSS transitions. You
                                                            can modify
                                                            any of this with custom CSS or overriding our default
                                                            variables. It's
                                                            also worth noting that just about any HTML can go within the
                                                            <code>.accordion-body</code>, though the transition does
                                                            limit overflow.
                                                        </p>
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
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class="section landing-Features py-4" id="testimonials">
                <div class="container reviews-container">
                    <div class="grid grid-cols-12 gap-x-6 justify-center pb-3">
                        <div class="xl:col-span-1 col-span-12"></div>
                        <div class="xl:col-span-10 col-span-12">
                            <div class="text-center mb-0 mt-4 heading-section">
                                <p class="text-xs font-medium text-success mb-1"><span
                                        class="landing-section-heading landing-section-heading-dark text-white">TESTIMONALS</span>
                                </p>
                                <h4 class="mt-3 text-white mb-1">Discover What People Are Saying About Us</h4>
                                <div class="text-[14px] text-white mb-4 opacity-80"> Customer reviews, social media and
                                    testimonials to discover how is our products or services.</div>
                            </div>
                            <div class="swiper pagination-dynamic testimonialSwiperService">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>


                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Elsa Teresa</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            elsateresa@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Henry Milo</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            henrymilo@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Katherin Oslo</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            katherinoslo212@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Jestin Calm</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            jestincalm1999@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Harin ford</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            harinford345@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i
                                                                class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);"
                                                            class="font-semibold text-[11px] text-white"
                                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                            data-bs-placement="top"
                                                            data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""
                                                            class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Phillip John</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            phillipjohn21@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div
                                                            class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-1 col-span-12"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section" id="contact">
                <div class="container text-center">
                    <p class="text-xs font-medium text-success mb-1"><span
                            class="landing-section-heading text-primary">CONTACT US</span>
                    </p>
                    <h4 class="!font-semibold mt-3 mb-2">Need Help? Find Your Answers Here!</h4>
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xl:col-span-9 col-span-12">
                            <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal"> Explore Our
                                Comprehensive Support Resources! Get answers to your queries and find solutions.</p>
                        </div>
                    </div>
                    <div class="box-body p-0">
                        <div class="box contactus-form contactus-form-left overflow-hidden">
                            <div class="box-body text-start px-xl-5 px-4 py-5">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-3 pt-0">
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                        <div class="mb-3">
                                            <i class="ri-map-pin-fill me-2 text-primary"></i> D.No: 1352/A-12, Street,
                                            Hyderabad.
                                        </div>
                                        <div class="mb-3">
                                            <i class="ri-phone-fill text-primary"></i> +122 1234 32422
                                        </div>
                                        <div class="mb-4">
                                            <i class="ri-mail-fill text-primary"></i> carolinahanna424@example.com
                                        </div><iframe allowfullscreen height="190" class="w-full"
                                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin"
                                            style="border:0;"></iframe>
                                    </div>
                                    <div class="xxl:col-span-8 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                        <div class="grid grid-cols-12 gap-x-6 gap-y-3 text-start">
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-address-firstname">First Name
                                                    :</label> <input class="form-control !bg-light dark:!bg-light"
                                                    id="contact-address-firstname" placeholder="Enter Name" type="text">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-address-email">Email Id :</label>
                                                <input class="form-control !bg-light dark:!bg-light" id="contact-address-email"
                                                    placeholder="Enter Email Id" type="email">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-mail-message">Message :</label>
                                                <textarea class="form-control !bg-light dark:!bg-light" id="contact-mail-message"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class=" mt-4">
                                            <button
                                                class="ti-btn ti-btn-primary btn-wave btn-w-lg waves-effect waves-light">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section landing-footer text-white">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-4 sm:col-span-6 col-span-12 md:mb-0 mb-3">
                            <div class="px-4">
                                <p class="font-medium mb-3"><a href="{{url('index')}}"><img
                                            src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt=""
                                            class="landing-footer-logo"></a></p>
                                <p class="mb-2 opacity-60 font-normal">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam,
                                    fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores
                                    accusantium aspernatur minus ea incidunt.
                                </p>
                                <p class="mb-0 opacity-60 font-normal">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit.
                                    Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class="md:col-span-2 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium mb-3 text-white">PAGES</h6>
                                <ul class="list-none opacity-60 font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Projects</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:col-span-2 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium text-white">INFO</h6>
                                <ul class="list-none opacity-60 font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:col-span-4 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium text-white">CONTACT</h6>
                                <ul class="list-none font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60"><i
                                                class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60"><i
                                                class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60"><i
                                                class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60"><i
                                                class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 font-medium opacity-80">FOLLOW US ON :</p>
                                        <div class="mb-0">
                                            <div class="ti-btn-list">
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary  btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary3 text-primarytint3color btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line font-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->
        </div>
        <!-- End::main-content -->

@endsection

@section('scripts')

        <!-- Internal Landing JS -->
        @vite('resources/assets/js/landing.js')


@endsection