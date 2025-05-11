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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Team</h1>
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
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape primary"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-primary">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primary font-medium">Director</p>
                                        <h6 class="mb-3 font-semibold">Hadley Kylin</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape secondary"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-secondary">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="mb-2 text-[11px] badge leading-none bg-primarytint1color font-medium">Manager</span>
                                        <h6 class="mb-3 font-semibold">Ethan Mitchell</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape success"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-success">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint2color font-medium">Creative Director</p>
                                        <h6 class="mb-3 font-semibold">Iliana Lilly</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape orange"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-orange">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint3color font-medium">Board Director</p>
                                        <h6 class="mb-3 font-semibold">Jasmine Della</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape info"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-info">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-secondary font-medium">Board Director</p>
                                        <h6 class="mb-3 font-semibold">Aurora Reed</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape warning"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-warning">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-success font-medium">Board Director</p>
                                        <h6 class="mb-3 font-semibold">Ava Taylor</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape danger"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-danger">
                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primary font-medium">Board Director</p>
                                        <h6 class="mb-3 font-semibold">Spencer Robin</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape teal"></div>
                                <div class="box-body">
                                    <div class="mb-3 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-teal">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint1color font-medium">Board Director</p>
                                        <h6 class="mb-3 font-semibold">Owen Foster</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary btn-wave ti-btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
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

            <!-- Start:: add-members modals -->

            <!-- Start:: team ui modal -->
            <div class="hs-overlay hidden ti-modal" id="create-teamui-mem" tabindex="-1" aria-labelledby="create-teamuiLabel" aria-hidden="true">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h6 class="ti-modal-title" id="create-teamuiLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="ti-modal-body">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12">
                                    <label for="team-name3" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name3" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="ti-modal-footer">
                            <button type="button" class="ti-btn ti-btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="ti-btn ti-btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team ui modal -->

            <!-- Start:: team react modal -->
            <div class="hs-overlay hidden ti-modal" id="create-teamreact-mem" tabindex="-1" aria-labelledby="create-teamreactLabel" aria-hidden="true">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h6 class="ti-modal-title" id="create-teamreactLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="ti-modal-body">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12">
                                    <label for="team-name1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name1" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="ti-modal-footer">
                            <button type="button" class="ti-btn ti-btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="ti-btn ti-btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team react modal -->

            <!-- Start:: team testing modal -->
            <div class="hs-overlay hidden ti-modal" id="create-teamtesting-mem">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h6 class="ti-modal-title" id="create-teamtestingLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="ti-modal-body">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12">
                                    <label for="team-name2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name2" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="ti-btn ti-btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="ti-btn ti-btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team testing modal -->

            <!-- End:: add-members modals -->

@endsection

@section('scripts')
                        
            
@endsection