@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Blog Details</h1>
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
                        <div class="xl:col-span-9 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <a href="javascript:void(0);" class="p-4">
                                            <img src="{{asset('build/assets/images/media/blog/18.jpg')}}" class="card-img rounded-md blog-details-img" alt="...">
                                        </a>
                                        <div class="box-body p-4">
                                            <div class="flex items-center justify-between mb-3">
                                                <p class="h5 font-semibold mb-0">Music for the Soul: Enhancing Your Life Through Sound</p>
                                                <span class="badge bg-secondary">Music</span>
                                            </div>
                                            <div class="sm:flex items-center mb-3">
                                                <div class="flex items-center flex-auto">
                                                    <span class="avatar avatar-sm avatar-rounded me-3">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-medium">Herbert Paul</p>
                                                        <div class="text-xs text-textmuted dark:text-textmuted/50 font-normal"><i class="ri-calendar-fill me-2 align-middle leading-none text-primarytint1color"></i>12 Jan 2024 - 06:56</div>
                                                    </div>
                                                </div>
                                                <div class="btn-list sm:mt-0 mt-2 flex items-center flex-wrap">
                                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary2  btn-wave"><i class="ri-thumb-up-line"></i> Like</button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary1  btn-wave"><i class="ri-share-line"></i> Share</button>
                                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info  btn-wave"><i class="ri-message-square-line"></i> Comment</button>
                                                </div>
                                            </div>
                                            <p class="mb-4">
                                                Soul-stirring journey to discover the transformative power of music in our lives. This blog is a sanctuary for those seeking solace, inspiration, and healing through the timeless melodies that resonate within us all.
                                            </p>
                                            <p class="mb-4">
                                                From the therapeutic rhythms of drumming circles to the transcendent harmonies of choral singing, <span class="text-[14px] font-medium"> "Music for the Soul" </span> celebrates the diverse ways in which music enriches our lives and nourishes our innermost being.. Whether you're seeking refuge from the stresses of daily life, seeking inspiration for your artistic pursuits, or simply yearning to connect with something greater than yourself.
                                            </p>
                                            
                                            <p class="mb-4">Let the melodies of music be your guiding light on the path to self-discovery and spiritual awakening. Enhancing Your Life Through Sound" invites you to explore the profound impact of music on our emotional well-being, spiritual growth, and everyday existence. The transformative power of music to heal, uplift, and inspire us in ways both subtle and profound.</p>
                                            <blockquote class="blockquote custom-blockquote primary mb-4 text-center">
                                                <h6 class="lh-base">"Music for the Soul" offers a gentle reminder of the healing power that resides within every note, every chord, and every melody. </h6>
                                                <footer class="blockquote-footer mt-3 text-primarytint1color mb-0">Someone famous as <cite title="Source Title">- Ayyan Abhi</cite></footer>
                                                <span class="quote-icon"><i class="ri-double-quotes-l"></i></span>
                                            </blockquote>
                                            <p class="mb-0">
                                                Through captivating stories, insightful reflections, and practical tips, we delve into the myriad ways in which music enriches our lives, from its ability to evoke cherished memories to its capacity to elevate our consciousness and connect us to something greater than ourselves. Whether you're seeking solace in times of sorrow, seeking inspiration in moments of doubt, or simply yearning to deepen your connection to the world around you, "Music for the Soul" offers a gentle reminder
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header">
                                            <div class="box-title">
                                                COMMENTS
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush !rounded-none !border-0" id="blog-details-comment-list">
                                                <li class="ti-list-group-item border-0 border-b">
                                                    <div class="flex items-start gap-4">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto sm:w-[50%]">
                                                            <span class="font-medium block mb-1">Mary Cateline</span>
                                                            <span class="block mb-3">This blog captures the essence of why music is such a powerful force in our lives. It's not just about the sounds. Thank you for reminding us of the beauty and magic of music</span>
                                                            <div class="btn-list">
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3 btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item border-0 border-b">
                                                    <div class="flex items-start gap-4 flex-wrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto sm:w-[50%]">
                                                            <span class="font-medium block mb-1">Monte vin</span>
                                                            <span class="block mb-3">Reading your blog is like taking a journey into the heart of music itself. Your passion for the subject shines through in every word!</span>
                                                            <div class="btn-list">
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3 btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item border-0">
                                                    <div class="flex items-start gap-4">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto sm:w-[50%]">
                                                            <span class="font-medium block mb-1">Master Sets</span>
                                                            <span class="block mb-3">The importance of carving out moments of stillness in our busy lives to simply listen and be present with the music. It's a powerful reminder that sometimes .</span>
                                                            <div class="btn-list">
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary2 btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="ti-btn ti-btn-icon ti-btn-sm ti-btn-soft-primary3 btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Leave a Comment
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="blog-first-name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                                                </div>
                                                <div class="xl:col-span-6 col-span-12"> 
                                                    <label for="blog-email" class="form-label">Email ID</label>
                                                    <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                                                </div>
                                                <div class="xl:col-span-12 col-span-12">
                                                    <label for="blog-comment" class="form-label">Write Comment</label>
                                                    <textarea class="form-control" id="blog-comment" rows="4" placeholder="Write Here......."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="text-end">
                                                <button class="ti-btn ti-btn-primary">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Related Topics  
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="ti-list-group">
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-brush-fill text-[14px] p-1 rounded-2 inline-block align-middle leading-none bg-primary/10 text-primary"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Desiging</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary">13</span>
                                                            </div>
                                                        </div>    
                                                    </a>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-pencil-fill text-[14px] p-1 rounded-md inline-block align-middle leading-none bg-primarytint1color/10 text-primarytint1color"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Modern</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primarytint1color">36</span>
                                                            </div>
                                                        </div>    
                                                    </a>                                           
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-microscope-fill text-[14px] p-1 rounded-md inline-block align-middle leading-none bg-primarytint2color/10 text-primarytint2color"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Science</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primarytint2color">15</span>
                                                            </div>
                                                        </div>    
                                                    </a>       
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-flight-takeoff-fill text-[14px] p-1 rounded-md inline-block align-middle leading-none bg-primarytint3color/10 text-primarytint3color"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Trips</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primarytint3color">17</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-magic-fill text-[14px] p-1 rounded-md inline-block align-middle leading-none bg-secondary/10 text-secondary"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Beauty</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-secondary">66</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i class="ri-shirt-fill text-[14px] p-1 rounded-md inline-block align-middle leading-none bg-success/10 text-success"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium ms-2">Styling</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-warning">33</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Recent Posts
                                            </div>
                                            <a href="javascript:void(0);" class="text-xs text-textmuted dark:text-textmuted/50"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                        </div>
                                        <div class="box-body p-0">
                                            <ul class="ti-list-group list-group-flush">
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/14.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <a href="javascript:void(0);" class="text-[14px] mb-0 text-primary">Nature</a>
                                                            <p class="mb-1 popular-blog-content truncate font-medium">
                                                                The Wonders of Nature
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">18 Jan 2024, 15:46</span>
                                                        </div>
                                                        <div>
                                                            <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/15.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <a href="javascript:void(0);" class="text-[14px] mb-0 text-primarytint1color">Tourism</a>
                                                            <p class="mb-1 popular-blog-content truncate font-medium">
                                                                Embarking on a Tourism 
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">20 Feb 2024, 03:03</span>
                                                        </div>
                                                        <div>
                                                            <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/16.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <a href="javascript:void(0);" class="text-[14px] mb-0 text-primarytint2color">Technology</a>
                                                            <p class="mb-1 popular-blog-content truncate font-medium">
                                                                Navigating the Digital Frontier
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">05 Feb 2024, 16:23</span>
                                                        </div>
                                                        <div>
                                                            <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="flex gap-4 flex-wrap items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="{{asset('build/assets/images/media/blog/17.jpg')}}" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-auto">
                                                            <a href="javascript:void(0);" class="text-[14px] mb-0 text-primary3">Networking</a>
                                                            <p class="mb-1 popular-blog-content truncate font-medium">
                                                                More Designing on websites
                                                            </p>
                                                            <span class="text-textmuted dark:text-textmuted/50 text-xs">13 Mar 2024, 20:14</span>
                                                        </div>
                                                        <div>
                                                            <button class="ti-btn ti-btn-icon bg-light ti-btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Gallery
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 gap-x-4 gap-y-3">
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-48.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-48.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-49.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-49.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-50.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-50.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-51.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-51.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-52.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-53.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-54.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-54.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-55.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-55.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-6">
                                                    <a href="{{asset('build/assets/images/media/media-56.jpg')}}" class="glightbox box mb-0" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="image" >
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box !bg-primary/10 dark:!bg-primary/10 border-0 shadow-none">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Our News Letter
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <label class="form-check-label">
                                                Subscribe for Updates on the Latest News & Posts
                                            </label>
                                            <div class="input-group mt-4">
                                                <input type="text" class="form-control border-0 shadow-none" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                <button class="ti-btn ti-btn-primary btn-wave !m-0" type="button" id="blog-subscribe">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Popular Tags
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="blog-popular-tags mb-2">
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#artist</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#musician</span>
                                                </a>    
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#monology</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#promting</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#critisium</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#mentor</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#adventure</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#capturing</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#navigator</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#mountain</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#popsinger</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#lyrists</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#musicnotes</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#multiplecovers</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#facesact</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#language</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-textmuted dark:text-textmuted/50">#fluency</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')
            
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

        <!-- Blog Details JS -->
        @vite('resources/assets/js/blog-details.js')
        

@endsection