@extends('layouts.master')

@section('styles')
  

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
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Pages
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Email</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Mail Settings</h1>
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
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6 mb-5">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <ul class="nav nav-tabs flex-col nav-tabs-header mb-0 mail-settings-tab" role="tablist">
                                        <li class="nav-item me-0">
                                            <a class="nav-link flex items-center w-full active" role="tab"
                                                data-hs-tab="#email-settings"><i
                                                    class="ri-mail-line me-2 align-middle text-[14px] leading-none text-primary"></i>Email</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link flex items-center w-full" role="tab"
                                                data-hs-tab="#security"><i
                                                    class="ri-lock-star-line me-2 align-middle text-[14px] leading-none text-primary"></i>Security</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link flex items-center w-full" role="tab"
                                                data-hs-tab="#notification-settings"><i
                                                    class="ri-notification-3-line me-2 align-middle text-[14px] leading-none text-primary"></i>Notifications</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link flex items-center w-full" role="tab"
                                                data-hs-tab="#account-settings"><i
                                                    class="ri-shield-user-line me-2 align-middle text-[14px] leading-none text-primary"></i>Account
                                                Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Social Links</div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12"> <label for="facebook"
                                                class="form-label">Facebook :</label>
                                            <input type="text" class="form-control !bg-light dark:!bg-light" id="facebook"
                                                placeholder="https://" value="https://www.facebook.com">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12"> <label for="Twitter"
                                                class="form-label">Twitter :</label>
                                            <input type="text" class="form-control !bg-light dark:!bg-light" id="Twitter"
                                                placeholder="https://" value="https://twitter.com">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12"> <label for="Pinterest"
                                                class="form-label">Pinterest:</label>
                                            <input type="text" class="form-control !bg-light dark:!bg-light" id="Pinterest"
                                                placeholder="https://" value="https://in.pinterest.com">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12"> <label for="Linkedin"
                                                class="form-label">Linkedin :</label>
                                            <input type="text" class="form-control !bg-light dark:!bg-light" id="Linkedin"
                                                placeholder="https://" value="https://www.linkedin.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-body p-0">
                                    <div class="tab-content border-0">
                                        <div class="tab-pane active show p-0" id="email-settings" role="tabpanel">
                                            <ul class="ti-list-group list-group-flush !rounded-none">
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-6 gap-y-2 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Keyboard Shortcuts
                                                                :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="keyboard-enable" id="keyboard-enable1">
                                                                <label class="form-check-label" for="keyboard-enable1">
                                                                    Keyboard Shortcuts Enable
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="keyboard-enable" id="keyboard-disable2"
                                                                    checked="">
                                                                <label class="form-check-label" for="keyboard-disable2">
                                                                    Keyboard Shortcuts Disable
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="keyboard-shortcuts">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-6 gap-y-2 justify-between">
                                                        <div
                                                            class="xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Menu View :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Default View
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault2"
                                                                    checked="">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Advanced View
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                id="menu-view">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-6 gap-y-2 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Images :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="images-open" id="images-open1">
                                                                <label class="form-check-label" for="images-open1">
                                                                    Always Open Images
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="images-open" id="images-hide2" checked="">
                                                                <label class="form-check-label" for="images-hide2">
                                                                    Ask For Permission
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="mails-images">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-6 gap-y-2 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Mail Send Action
                                                                :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="on-keyboard" checked="">
                                                                <label class="form-check-label" for="on-keyboard">
                                                                    On Keyboard Action
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="on-buttonclick">
                                                                <label class="form-check-label" for="on-buttonclick">
                                                                    On Button Click
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="sm:float-end">
                                                                <a href="javascript:void(0)"
                                                                    class="ti-btn ti-btn-outline-success ti-btn-sm">Learn-more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Maximum Mails Per
                                                                Page :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <select class="form-control" data-trigger name="mail-per-page"
                                                                id="mail-per-page">
                                                                <option value="Choice 1" selected>10</option>
                                                                <option value="Choice 2">50</option>
                                                                <option value="Choice 3">100</option>
                                                                <option value="Choice 3">120</option>
                                                            </select>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="mails-per-page">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-2 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Mail Composer
                                                                :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="flex gap-4 items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="mail-composer" id="mail-composeron1">
                                                                    <label class="form-check-label" for="mail-composeron1">
                                                                        Mail Composer On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="mail-composer" id="mail-composeroff2"
                                                                        checked="">
                                                                    <label class="form-check-label" for="mail-composeroff2">
                                                                        Mail Composer Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="mail-composer">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Language :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <label for="mail-language" class="form-label">Languages
                                                                :</label>
                                                            <select class="form-control" name="mail-language"
                                                                id="mail-language" multiple>
                                                                <option value="Choice 1" selected>English</option>
                                                                <option value="Choice 2">French</option>
                                                                <option value="Choice 3">Arabic</option>
                                                                <option value="Choice 4">Hindi</option>
                                                            </select>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="mail-languages">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-2 justify-between">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[14px] font-medium mb-0">Auto Correct :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="flex gap-4 items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="auto-correct" id="auto-correcton1">
                                                                    <label class="form-check-label" for="auto-correcton1">
                                                                        Auto Correct On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="auto-correct" id="auto-correctoff2"
                                                                        checked="">
                                                                    <label class="form-check-label" for="auto-correctoff2">
                                                                        Auto Correct Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="toggle toggle-success mb-0 sm:float-end"
                                                                id="auto-correct">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 hidden" id="security" role="tabpanel">
                                            <ul class="ti-list-group list-group-flush list-none !rounded-none">
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-medium">Logging In</p>
                                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                Security settings related to logging into our email account
                                                                and taking down account if any mischevious action happended.
                                                            </p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12">
                                                            <div
                                                                class="sm:flex block items-top justify-between mt-sm-0 mt-3">
                                                                <div class="mail-security-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Max Limit for
                                                                        login attempts</p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-sm-0 mb-2">
                                                                        Account will freeze for 24hrs while attempt to login
                                                                        with wrong credentials for selected number of times
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control" data-trigger
                                                                        name="max-login-attempts" id="max-login-attempts">
                                                                        <option value="Choice 1" selected>3 Attempts
                                                                        </option>
                                                                        <option value="Choice 2">5 Attempts</option>
                                                                        <option value="Choice 3">10 Attempts</option>
                                                                        <option value="Choice 3">20 Attempts</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top justify-between mt-3">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Account Freeze
                                                                        time management</p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-sm-0 mb-2">
                                                                        You can change the time for the account freeze when
                                                                        attempts for </p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control" data-trigger
                                                                        name="account-freeze-time-format"
                                                                        id="account-freeze-time-format">
                                                                        <option value="Choice 1" selected>1 Day</option>
                                                                        <option value="Choice 2">1 Hour</option>
                                                                        <option value="Choice 3">1 Month</option>
                                                                        <option value="Choice 3">1 Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-medium">Password Requirements
                                                            </p>
                                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                Security settings related to password strength.</p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12">
                                                            <div
                                                                class="sm:flex block items-top justify-between mt-sm-0 mt-3 gap-4">
                                                                <div class="mail-security-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Minimum number
                                                                        of characters in the password</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        There should be a minimum number of characters for a
                                                                        password to be validated that shouls be set here.
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control" value="8">
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top justify-between mt-3">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Contain A Number
                                                                    </p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Password should contain a number.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="password-number">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top justify-between mt-3">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Contain A
                                                                        Special Character</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Password should contain a special Character.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="password-special-character">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top justify-between mt-3">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Atleast One
                                                                        Capital Letter</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Password should contain atleast one capital letter.
                                                                    </p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 sm:float-end"
                                                                    id="password-capital">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top justify-between mt-3">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Maximum Password
                                                                        Length</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Maximum password lenth should be selected here.</p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control" value="16">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-medium">Unknown Chats</p>
                                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                Security settings related to unknown chats.</p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12 ms-auto">
                                                            <div class="btn-group inline-flex" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check opacity-0 absolute"
                                                                    name="strap-material" id="strap1" checked="">
                                                                <label
                                                                    class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex ti-btn-outline-light z-0 !rounded-e-none !border-e-0 sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                                    for="strap1">
                                                                    Show
                                                                </label>
                                                                <input type="radio" class="btn-check  opacity-0 absolute"
                                                                    name="strap-material" id="strap31">
                                                                <label
                                                                    class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex ti-btn-outline-light !rounded-s-none !text-defaulttextcolor z-0  sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                                    for="strap31">
                                                                    Hide
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 hidden" id="notification-settings" role="tabpanel">
                                            <ul class="ti-list-group list-group-flush list-none !rounded-none">
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-medium">Email Notifications</p>
                                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                Email notifications are the notifications you will receeive
                                                                when you are offline, you can customize them by enabling or
                                                                disabling them.</p>
                                                        </div>
                                                        <div class="xl:col-span-7 col-span-12">
                                                            <div class="flex items-top justify-between mt-sm-0 mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Updates &
                                                                        Features</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Notifications about new updates and their features.
                                                                    </p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="update-features">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Early Access</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Users are selected for beta testing of new
                                                                        update,notifications relating or participate in any
                                                                        of paid product promotion.</p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 sm:float-end"
                                                                    id="early-access">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Email Shortcuts
                                                                    </p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Shortcut notifications for email.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="email-shortcut">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">New Mails</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Notifications related to new mails received.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="new-mails">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Mail Chat
                                                                        Messages</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Any of new messages are received will be updated
                                                                        through notifications.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="mail-chat-messages">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group-item">
                                                    <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-medium">Push Notifications</p>
                                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                Push notifications are recieved when you are online, you can
                                                                customize them by enabling or disabling them.</p>
                                                        </div>
                                                        <div class="xl:col-span-7 col-span-12">
                                                            <div class="flex items-top justify-between mt-sm-0 mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">New Mails</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Notifications related to new mails received.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="push-new-mails">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Mail Chat
                                                                        Messages</p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Any of new messages are received will be updated
                                                                        through notifications.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 sm:float-end"
                                                                    id="push-mail-chat-messages">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[14px] mb-1 font-medium">Mail Extensions
                                                                    </p>
                                                                    <p
                                                                        class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                                        Notifications related to the extensions received by
                                                                        new emails and thier propertied also been displayed.
                                                                    </p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 sm:float-end"
                                                                    id="mail-extensions">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 hidden" id="account-settings" role="tabpanel">
                                            <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                                <div class="xxl:col-span-7 col-span-12">
                                                    <div class="box shadow-none mb-0">
                                                        <div class="box-body">
                                                            <div class="sm:flex block items-top mb-4 justify-between">
                                                                <div class="w-[75%]">
                                                                    <p class="text-[14px] mb-1 font-medium">Two Step
                                                                        Verification</p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-0">
                                                                        Two-step verification provides enhanced security
                                                                        measures and helps prevent unauthorized access and
                                                                        fraudulent activities.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0"
                                                                    id="two-step-verification">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top mb-4 justify-between">
                                                                <div class="mb-sm-0 mb-2 w-[75%]">
                                                                    <p class="text-[14px] mb-2 font-medium">Authentication
                                                                    </p>
                                                                    <div class="btn-group inline-flex" role="group"
                                                                        aria-label="Basic radio toggle button group">
                                                                        <input type="radio"
                                                                            class="btn-check opacity-0 absolute"
                                                                            name="strap-material" id="strap11" checked="">
                                                                        <label
                                                                            class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex ti-btn-outline-light z-0 !rounded-e-none !border-e-0 sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                                            for="strap11"><i
                                                                            class="ri-lock-unlock-line me-1 align-middle inline-block"></i>Pin
                                                                        </label> <input type="radio"
                                                                            class="btn-check  opacity-0 absolute"
                                                                            name="strap-material" id="strap2"> 
                                                                            <label
                                                                            class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex ti-btn-outline-light !text-defaulttextcolor !rounded-none !border-e-0 z-0  sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                                            for="strap2"><i
                                                                            class="ri-lock-password-line me-1 align-middle inline-block"></i>Password
                                                                        </label>
                                                                        <input type="radio"
                                                                            class="btn-check  opacity-0 absolute"
                                                                            name="strap-material" id="strap3"> 
                                                                            <label
                                                                            class="!mb-0 ti-btn  btn-wave !m-0 !block sm:!inline-flex ti-btn-outline-light !rounded-s-none !text-defaulttextcolor z-0  sm:text-[0.813rem] text-[0.75rem] waves-effect waves-light"
                                                                            for="strap3"><i
                                                                            class="ri-fingerprint-line me-1 align-middle inline-block"></i>Finger
                                                                        Print
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2"
                                                                    id="authentication">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top mb-4 justify-between">
                                                                <div class="w-[75%]">
                                                                    <p class="text-[14px] mb-1 font-medium">Recovery Mail
                                                                    </p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-0">
                                                                        In case of forgetting passwords, emails are sent to
                                                                        aana14@gmail.com.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2"
                                                                    id="recovery-mail">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-top mb-4 justify-between">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">SMS Recovery</p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50 mb-0">
                                                                        In case of recovery, SMS messages are sent to
                                                                        9876543xx</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2"
                                                                    id="sms-recovery">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-top justify-between">
                                                                <div>
                                                                    <p class="text-[14px] mb-1 font-medium">Reset Password
                                                                    </p>
                                                                    <p
                                                                        class="text-xs text-textmuted dark:text-textmuted/50">
                                                                        Password should be min of <b class="text-success">8
                                                                            digits<sup>*</sup></b>,atleast <b
                                                                            class="text-success">One Capital
                                                                            letter<sup>*</sup></b> and <b
                                                                            class="text-success">One Special
                                                                            Character<sup>*</sup></b> included.</p>
                                                                    <div class="mb-2">
                                                                        <label for="current-password"
                                                                            class="form-label">Current Password</label>
                                                                        <input type="text" class="form-control"
                                                                            id="current-password"
                                                                            placeholder="Current Password">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label for="new-password" class="form-label">New
                                                                            Password</label>
                                                                        <input type="text" class="form-control"
                                                                            id="new-password" placeholder="New Password">
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <label for="confirm-password"
                                                                            class="form-label">Confirm Password</label>
                                                                        <input type="text" class="form-control"
                                                                            id="confirm-password"
                                                                            placeholder="Confirm Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-5 col-span-12">
                                                    <div class="box shadow-none mb-0">
                                                        <div class="box-header justify-between sm:flex block">
                                                            <div class="box-title">Registered Devices</div>
                                                            <div class="mt-sm-0 mt-2">
                                                                <button class="ti-btn ti-btn-sm ti-btn-primary">Signout from
                                                                    all devices</button>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <ul class="ti-list-group">
                                                                <li class="ti-list-group-item">
                                                                    <div class="sm:flex block items-top">
                                                                        <div class="leading-none mb-sm-0 mb-2"><i
                                                                                class="bi bi-phone me-2 text-[1rem] align-middle text-textmuted dark:text-textmuted/50"></i>
                                                                        </div>
                                                                        <div class="leading-none flex-auto">
                                                                            <p class="mb-1">
                                                                                <span
                                                                                    class="font-medium">Mobile-LG-1023</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span
                                                                                    class="text-textmuted dark:text-textmuted/50 text-[11px]">Manchester,
                                                                                    UK-Nov 30, 04:45PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="ti-dropdown hs-dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);"
                                                                                class="ti-btn ti-btn-icon ti-btn-sm bg-light ti-dropdown-toggle hs-dropdown-toggle"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul
                                                                                class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Action</a>
                                                                                </li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Another
                                                                                        action</a></li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Something
                                                                                        else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item">
                                                                    <div class="sm:flex block items-top">
                                                                        <div class="leading-none mb-sm-0 mb-2"><i
                                                                                class="bi bi-laptop me-2 text-[1rem] align-middle text-textmuted dark:text-textmuted/50"></i>
                                                                        </div>
                                                                        <div class="leading-none flex-auto">
                                                                            <p class="mb-1">
                                                                                <span
                                                                                    class="font-medium">Lenovo-1291203</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span
                                                                                    class="text-textmuted dark:text-textmuted/50 text-[11px]">England,
                                                                                    UK-Aug 12, 12:25PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="ti-dropdown hs-dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);"
                                                                                class="ti-btn ti-btn-icon ti-btn-sm bg-light ti-dropdown-toggle hs-dropdown-toggle"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul
                                                                                class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Action</a>
                                                                                </li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Another
                                                                                        action</a></li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Something
                                                                                        else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item">
                                                                    <div class="sm:flex block items-top">
                                                                        <div class="leading-none mb-sm-0 mb-2"><i
                                                                                class="bi bi-laptop me-2 text-[1rem] align-middle text-textmuted dark:text-textmuted/50"></i>
                                                                        </div>
                                                                        <div class="leading-none flex-auto">
                                                                            <p class="mb-1">
                                                                                <span
                                                                                    class="font-medium">Macbook-Suzika</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span
                                                                                    class="text-textmuted dark:text-textmuted/50 text-[11px]">Brightoon,
                                                                                    UK-Jul 18, 8:34AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="ti-dropdown hs-dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);"
                                                                                class="ti-btn ti-btn-icon ti-btn-sm bg-light ti-dropdown-toggle hs-dropdown-toggle"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul
                                                                                class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Action</a>
                                                                                </li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Another
                                                                                        action</a></li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Something
                                                                                        else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ti-list-group-item">
                                                                    <div class="sm:flex block items-top">
                                                                        <div class="leading-none mb-sm-0 mb-2"><i
                                                                                class="bi bi-pc-display-horizontal me-2 text-[1rem] align-middle text-textmuted dark:text-textmuted/50"></i>
                                                                        </div>
                                                                        <div class="leading-none flex-auto">
                                                                            <p class="mb-1">
                                                                                <span
                                                                                    class="font-medium">Apple-Desktop</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span
                                                                                    class="text-textmuted dark:text-textmuted/50 text-[11px]">Darlington,
                                                                                    UK-Jan 14, 11:14AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="ti-dropdown hs-dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);"
                                                                                class="ti-btn ti-btn-icon ti-btn-sm bg-light ti-dropdown-toggle hs-dropdown-toggle"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul
                                                                                class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Action</a>
                                                                                </li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Another
                                                                                        action</a></li>
                                                                                <li><a class="ti-dropdown-item"
                                                                                        href="javascript:void(0);">Something
                                                                                        else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0 flex justify-between gap-2 flex-wrap">
                                    <button class="ti-btn ti-btn-soft-primary1">
                                        Restore Defaults
                                    </button>
                                    <div class="ms-auto">
                                        <button class="ti-btn ti-btn-primary">
                                            Save Changes
                                        </button>
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
            
        <!-- Mail Settings -->
        @vite('resources/assets/js/mail-settings.js')
        

@endsection