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
                                    <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Profile Settings</h1>
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
                    <div class="">
                        <div class="max-w-[75%] mx-auto">
                            <div class="box">
                                <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap" id="myTab4" role="tablist">
                                    <li class="nav-item me-1" role="presentation">
                                        <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10 active" data-hs-tab="#account-pane" role="tab">Account</button>
                                    </li>
                                    <li class="nav-item me-1" role="presentation">
                                        <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#notification-tab-pane" role="tab">Notification</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#security-tab-pane" role="tab">Security</button>
                                    </li>
                                </ul>
                                <div class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">
                                    <div class="tab-pane show active overflow-hidden p-0 border-0" id="account-pane" role="tabpanel">
                                        <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                            <div class="font-semibold block text-[15px]">Account Settings :</div>
                                            <div class="ti-btn ti-btn-primary ti-btn-sm"><i class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                        </div>
                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                            <div class="xl:col-span-12 col-span-12">
                                                <div class="flex items-start flex-wrap gap-4">
                                                    <div>
                                                        <span class="avatar avatar-xxl">
                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="font-medium block mb-2">Profile Picture</span>
                                                        <div class="btn-list mb-1">
                                                            <button class="ti-btn ti-btn-sm ti-btn-primary btn-wave"><i class="ri-upload-2-line me-1"></i>Change Image</button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave"><i class="ri-delete-bin-line me-1"></i>Remove</button>
                                                        </div>
                                                        <span class="block text-xs text-textmuted dark:text-textmuted/50">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="profile-user-name" class="form-label">User Name :</label>
                                                <input type="text" class="form-control" id="profile-user-name" value="" placeholder="Enter Name">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="profile-email" class="form-label">Email :</label>
                                                <input type="email" class="form-control" id="profile-email" value="" placeholder="Enter Email">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="profile-designation" class="form-label">Designation :</label>
                                                <input type="text" class="form-control" id="profile-designation" value="" placeholder="Enter Designation">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="profile-language" class="form-label">Language :</label>
                                                <select class="form-control" data-trigger id="profile-language">
                                                    <option>Us English</option>
                                                    <option>Arabic</option> 
                                                    <option>Korean</option> 
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="profile-phn-no" class="form-label">Phone No :</label>
                                                <input type="text" class="form-control" id="profile-phn-no" value="" placeholder="Enter Number">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="website" class="form-label">Website :</label>
                                                <input type="text" class="form-control !bg-light dark:!bg-light" id="website" placeholder="https://" value="https://www.website.com">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label for="profile-address" class="form-label">Address :</label>
                                                <textarea class="form-control" id="profile-address" rows="3" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="notification-tab-pane" role="tabpanel">
                                        <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                            <div class="font-semibold block text-[15px]">Notifications Settings:</div>
                                            <div class="ti-btn ti-btn-primary ti-btn-sm"><i class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                        </div>
                                        <div class="grid grid-cols-12 sm:gap-x-6 gx-5 gap-y-3">
                                            <div class="xl:col-span-12 col-span-12">
                                                <p class="text-[14px] mb-1 font-medium">Configure Notifications</p>
                                                <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Users can tailor their experience to receive alerts for the types of events that matter to them.</p>
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <div class="flex items-top justify-between mt-3">
                                                    <div class="mail-notification-settings">
                                                        <p class="text-[14px] mb-1 font-medium">Push Notifications</p>
                                                        <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Alerts sent to the user's mobile device or desktop.</p>
                                                    </div>
                                                    <div class="toggle on toggle-success mb-0 float-sm-end" id="push-notifications">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-top justify-between mt-3">
                                                    <div class="mail-notification-settings">
                                                        <p class="text-[14px] mb-1 font-medium">Email Notifications</p>
                                                        <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Messages sent to the user's email address.</p>
                                                    </div>
                                                    <div class="toggle toggle-success mb-0 float-sm-end" id="email-notifications">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-top justify-between mt-3">
                                                    <div class="mail-notification-settings">
                                                        <p class="text-[14px] mb-1 font-medium">In-App Notifications</p>
                                                        <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Alerts that appear within the application interface.</p>
                                                    </div>
                                                    <div class="toggle toggle-success mb-0 float-sm-end" id="in-app-notifications">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-top justify-between mt-3">
                                                    <div class="mail-notification-settings">
                                                        <p class="text-[14px] mb-1 font-medium">SMS Notifications</p>
                                                        <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Text messages sent to the user's mobile phone.</p>
                                                    </div>
                                                    <div class="toggle toggle-success on mb-0 float-sm-end" id="sms-notifications">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-tab-pane" role="tabpanel">
                                        <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                            <div class="font-semibold block text-[15px]">Security Settings :</div>
                                            <div class="ti-btn ti-btn-primary ti-btn-sm"><i class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                        </div>
                                        <div class="sm:flex block items-top justify-between">
                                            <div class="w-50">
                                                <p class="text-[14px] mb-1 font-medium">Verification</p>
                                                <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Control how your profile information is verified for security purposes.</p>
                                            </div>
                                            <div class="flex gap-4">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value="" id="email-notifications01" checked="">
                                                    <label class="form-check-label" for="email-notifications01">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="sms-notifications01">
                                                    <label class="form-check-label" for="sms-notifications01">
                                                        SMS
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="phone-notifications">
                                                    <label class="form-check-label" for="phone-notifications">
                                                        Phone
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:flex block items-top justify-between mt-3">
                                            <div class="w-50">
                                                <p class="text-[14px] mb-1 font-medium">Login Verification</p>
                                                <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">This helps protect accounts from unauthorized access, even if a password is compromised.</p>
                                            </div>
                                            <a href="javascript:void(0);" class="link-primary underline">Set Up Verification</a>
                                        </div>
                                        <div class="sm:flex block items-top justify-between mt-3">
                                            <div class="w-50">
                                                <p class="text-[14px] mb-1 font-medium">Password Verification</p>
                                                <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">This additional step helps ensure that the person attempting to modify account details is the legitimate account owner.</p>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="personal-details">
                                                <label class="form-check-label" for="personal-details">
                                                    Require Personal Details
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0">
                                    <div class="btn-list float-end">
                                        <button class="ti-btn bg-primarytint2color text-white btn-wave">Deactivate Account</button>
                                        <button class="ti-btn ti-btn-primary btn-wave">Save Changes</button>
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
            

@endsection