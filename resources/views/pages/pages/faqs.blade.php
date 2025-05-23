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
                                  <li class="breadcrumb-item active" aria-current="page">Faq's</li>
                              </ol>
                          </nav>
                          <h1 class="page-title font-medium text-lg mb-0">Faq's</h1>
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

                  <!-- Start:: row-2 -->
                  <div class="grid grid-cols-12 gap-x-6 justify-center">
                      <div class="xl:col-span-1 col-span-12"></div>
                      <div class="xl:col-span-10 col-span-12">
                          <div class="box">
                              <div class="box-body !p-0">
                                  <div class="grid grid-cols-12 gap-x-6 justify-center border-b border-dashed mb-4 border-defaultborder dark:border-defaultborder/10">
                                      <div class="xl:col-span-2 col-span-12"></div>
                                      <div class="xl:col-span-8 col-span-12">
                                          <div class="py-2">
                                              <div class="text-center">
                                                  <h3 class="text-primarytint1color mb-3">FAQs</h3>
                                                  <h5 class="block">Require assistance? Here are some of our commonly asked questions!</h5>
                                                  <p class="text-textmuted dark:text-textmuted/50 mb-2 px-4">Discover answers to common queries and find solutions to your concerns with our comprehensive list of frequently asked questions.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="xl:col-span-2 col-span-12"></div>
                                  </div>
                                  <nav aria-label="Tabs" class="nav nav-tabs nav-tabs-header mb-4 flex justify-center faq-nav gap-2 flex-wrap" role="tablist">
                                      <a class="m-1 text-wrap hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer bg-light text-defaulttextcolor dark:text-defaulttextcolor/80 py-2 px-3  text-[0.8rem] font-medium rounded-sm hover:text-primary active"
                                        id="tab-1" role="tab" data-hs-tab="#tab1" >
                                        <i class="ti ti-settings me-1 d-inline-block"></i> General Settings
                                      </a>
                                      <a class="m-1 text-wrap hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer bg-light text-defaulttextcolor dark:text-defaulttextcolor/80 py-2 px-3 text-[0.8rem] font-medium rounded-sm hover:text-primary "
                                        id="tab-2" data-hs-tab="#tab2">
                                        <i class="ti ti-palette me-1 d-inline-block"></i> Theme Customization
                                      </a>
                                      <a class="m-1 text-wrap hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer bg-light text-defaulttextcolor dark:text-defaulttextcolor/80 py-2 px-3 text-[0.8rem] font-medium rounded-sm hover:text-primary "
                                        id="tab-3" data-hs-tab="#tab3">
                                        <i class="ti ti-user-cog me-1 d-inline-block"></i> User Management
                                      </a>
                                      <a class="m-1 text-wrap hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer bg-light text-defaulttextcolor dark:text-defaulttextcolor/80 py-2 px-3 text-[0.8rem] font-medium rounded-sm hover:text-primary "
                                        id="tab-4" data-hs-tab="#tab4">
                                        <i class="ti ti-shield-lock me-1 d-inline-block"></i> Security and Authentication
                                      </a>
                                      <a class="m-1 text-wrap hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer bg-light text-defaulttextcolor dark:text-defaulttextcolor/80 py-2 px-3 text-[0.8rem] font-medium rounded-sm hover:text-primary "
                                        id="tab-6" data-hs-tab="#tab6">
                                        <i class="ti ti-headset me-1 d-inline-block"></i> Troubleshooting and Support
                                      </a>
                                    </nav>
                                  <div class="tab-content mb-3 p-4 !pt-0">
                                      <div class="tab-pane show active border-0 p-0" id="tab1" aria-labelledby="tab-1" role="tabpanel">
                                          <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                            id="accordionFAQ1">
                                            <div class="hs-accordion-group">
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm active"
                                                id="faq-one">
                                                <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-one"> 1. How can I change the color scheme of the admin
                                                  template?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-one"
                                                  class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-one" style="display: block;">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">Navigate to the "Theme
                                                      Settings" page, where you'll find options to choose a primary color and accent
                                                      color. Select your desired colors and save the changes.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-two"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-two">2. Is it possible to upload a custom logo for my admin
                                                  dashboard?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-two"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-two">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 "> Yes, you can upload a
                                                      custom logo. Visit the "Logo & Branding" section and use the upload feature to
                                                      replace the default logo with your own. </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-twenty"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-three"> 3. Are there predefined themes available, or can I
                                                  create a custom theme?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-three"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-twenty">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 "> The admin template
                                                      provides both predefined themes and the option to create custom themes. Explore the
                                                      "Theme Gallery" for pre-made themes or use the "Customize Theme" feature for a
                                                      personalized look. </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-thirty"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-four">4. Can I use my own CSS styles to override the default
                                                  styles?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-four"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 "> Yes, you can add
                                                      custom CSS styles. In the "Advanced Settings," find the "Custom CSS" section and
                                                      enter your styles. Ensure compatibility and avoid conflicting with existing styles.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-three"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-five"> 5. How do I enable or disable the dark mode?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-five"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-three">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      To toggle dark mode, go to the "Appearance" settings. Find the "Dark Mode" option
                                                      and switch it on or off based on your preference.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0 hidden" id="tab2" aria-labelledby="tab-2" role="tabpanel">
                                          <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                            id="accordionFAQ2">
                                            <div class="hs-accordion-group">
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-one2"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-one1">1. What are user roles, and how do they affect access
                                                  permissions?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-one1"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-one2">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      User roles define the level of access. Visit "User Roles" in the admin settings to
                                                      manage roles and customize permissions for each role.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-two2"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-two2">2. Can I reset a user's password as an administrator?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-two2"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-two2">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, as an administrator, you can reset a user's password. Go to the "User
                                                      Management" page, select the user, and choose the "Reset Password" option.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-twenty3"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-three3">3. Is there a way to import multiple users
                                                  simultaneously?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-three3"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-twenty3">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, use the "Bulk Import" feature in the "User Management" section. Prepare a CSV
                                                      file with user details and upload it for quick user creation.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-thirty4"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-four4">4. How can I view the login history of a specific
                                                  user?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-four4"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Access the user's profile in the "User Management" area and navigate to the "Login
                                                      History" tab to view a detailed log of their login activities.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-three5"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-five5"> 5. What happens if a user forgets their password?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-five5"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-three5">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Users can reset their passwords by clicking on the "Forgot Password" link on the
                                                      login page. An email with instructions for password reset will be sent to their
                                                      registered email address.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0 hidden" id="tab3" aria-labelledby="tab-3" role="tabpanel">
                                          <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                            id="accordionFAQ3">
                                            <div class="hs-accordion-group">
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-one11"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-one11">1. Can I schedule automatic data exports for specific
                                                  intervals?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-one11"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-one11">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, you can schedule automatic exports. Explore the "Scheduled Exports" section to
                                                      set up recurring exports and choose the data format and destination.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-two22"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-two22">2. What types of data can be exported from the admin
                                                  template?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-two22"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-two22">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Most data tables in the admin template are exportable, including user data, reports,
                                                      and custom datasets. Use the "Export" feature in the respective sections.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-twenty33"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-three33">3. Is there a limit to the size of exported files?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-three33"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-twenty33">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      The export file size limit varies depending on the configuration. Check the "Export
                                                      Settings" to view and adjust the size limits if necessary.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-thirty44"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-four44">4. Can I customize the format of exported reports?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-four44"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, you can customize export formats. In the "Export Settings," find options to
                                                      choose the file format (CSV, Excel, etc.) and configure additional formatting
                                                      options.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-three55"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-five55"> 5. How do I generate and download a quick summary
                                                  report?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-five55"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-three55">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Navigate to the "Reports" section and use the "Generate Summary Report" button. Once
                                                      generated, click on the download link to get the summary report.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0 hidden" id="tab4" aria-labelledby="tab-4" role="tabpanel">
                                          <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                            id="accordionFAQ4">
                                            <div class="hs-accordion-group">
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-one111"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-one111">1. Are there security measures in place to protect
                                                  against unauthorized access?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-one111"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-one111">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, the admin template includes robust security features, including encryption,
                                                      secure password hashing, and session management. Regularly update the system and use
                                                      strong passwords for enhanced security.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-two222"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-two222">2. Can I enable two-factor authentication for admin
                                                  accounts?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-two222"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-two222">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, two-factor authentication is available. Access the "Security Settings" to
                                                      enable and configure 2FA for added account security.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-twenty333"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-three333">3. What should I do if I suspect a security
                                                  breach?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-three333"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-twenty333">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      In case of a security concern, immediately change your password and notify the
                                                      system administrator. Check the "Security Logs" for any suspicious activities.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-thirty444"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-four444">4. How often should I update the admin template for
                                                  security patches?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-four444"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      It's advisable to regularly check for updates and apply security patches. Aim to
                                                      update the admin template whenever a new version is released to ensure the latest
                                                      security measures are in place.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-three555"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-five555"> 5. Can I restrict access to certain features based
                                                  on user roles?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-five555"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-three555">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Yes, access restrictions can be set based on user roles. Utilize the "Role-based
                                                      Access Control" (RBAC) settings to configure specific permissions for different user
                                                      roles.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0 hidden" id="tab6" aria-labelledby="tab-6" role="tabpanel">
                                          <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                            id="accordionFAQ6">
                                            <div class="hs-accordion-group">
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-one11111"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-one11111">1. What should I do if the admin template is not
                                                  loading correctly?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-one11111"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-one11111">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      If you encounter loading issues, try clearing your browser cache or accessing the
                                                      admin template in an incognito/private browsing window. If the problem persists,
                                                      check the browser compatibility in the documentation.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-two22222"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-two22222">2. How can I report a bug or technical issue with
                                                  the admin template?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-two22222"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-two22222">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Report bugs through the "Support" or "Feedback" section. Provide detailed
                                                      information about the issue, including your browser version and steps to reproduce
                                                      the problem.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-twenty33333"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-three33333">3. Are there known compatibility issues with
                                                  certain browsers or devices?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-three33333"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-twenty33333">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Check the documentation for any known compatibility issues. Ensure you are using the
                                                      latest browser versions, and report any issues to the support team.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-thirty44444"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-four44444">4. What do I do if I forget my username or
                                                  encounter issues with login?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-four44444"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      If you forget your username, use the "Forgot Username" link on the login page. If
                                                      login issues persist, contact your system administrator or support for assistance.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 border-defaultborder mt-[0.5rem] rounded-sm "
                                                id="faq-three55555"> <button type="button"
                                                  class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border  hs-accordion-active:border-transparent dark:border-defaultborder/10 hs-accordion-active:bg-primary/10   dark:hs-accordion-active:border  justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                  aria-controls="faq-collapse-five55555"> 5. How do I check for updates and apply patches
                                                  to fix issues?
                                                  <svg
                                                    class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary block sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                  <svg
                                                    class="hs-accordion-active:block hs-accordion-active:!text-white hs-accordion-active:!bg-primary hs-accordion-active:group-hover:!text-primary hidden sm:w-[1.25rem] h-[1.25rem] w-[2.25rem] ms-2 p-[3px] rounded-full text-gray-600 bg-light group-hover:text-defaulttextcolor dark:text-defaulttextcolor/80 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round"></path>
                                                  </svg>
                                                </button>
                                                <div id="faq-collapse-five55555"
                                                  class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                  aria-labelledby="faq-three55555">
                                                  <div class="p-5">
                                                    <p class="text-defaulttextcolor dark:text-defaulttextcolor/80 ">
                                                      Visit the "Updates" section to check for the latest version. If updates are
                                                      available, follow the prompts to apply patches. This can resolve known issues and
                                                      enhance system stability.
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="grid grid-cols-12 sm:gap-x-6 bg-light m-4 mt-0 justify-between items-center rounded-md">
                                      <div class="sm:col-span-3 col-span-12 md:block hidden px-0">
                                          <img src="{{asset('build/assets/images/media/media-65.png')}}" alt="" class="img-fluid ps-3">
                                      </div>
                                      <div class="md:col-span-1 col-span-12"></div>
                                      <div class="md:col-span-8 col-span-12 px-0">
                                          <div class="p-4">
                                              <div>
                                                  <h5 class="font-semibold mb-2">Still Have Questions? We're Here to Help!</h5>
                                                  <span class="block text-xs text-textmuted dark:text-textmuted/50">
                                                      Contact our support team for personalized assistance. Your satisfaction is our priority!
                                                      Write your question below and we'll get back to you shortly.
                                                  </span>
                                                  <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4 mt-3"> 
                                                      <div class="xl:col-span-6 col-span-12"> 
                                                          <label for="user-name" class="form-label">Your Name</label> 
                                                          <input type="text" class="form-control" id="user-name" placeholder="Enter Your Name"> 
                                                      </div> 
                                                      <div class="xl:col-span-6 col-span-12"> 
                                                          <label for="user-email" class="form-label">Email Id</label> 
                                                          <input type="text" class="form-control" id="user-email" placeholder="Enter Email"> 
                                                      </div> 
                                                      <div class="xl:col-span-12 col-span-12"> 
                                                          <label for="text-area" class="form-label">Textarea</label>
                                                          <textarea class="form-control" placeholder="Enter your query here" id="text-area" rows="10"></textarea>
                                                      </div>
                                                      <div class="xl:col-span-12 col-span-12">
                                                          <button class="ti-btn ti-btn-primary btn-wave waves-effect waves-light" type="button" id="send">Send your question</button>
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="xl:col-span-1 col-span-12"></div>
                  </div>
                  <!-- End:: row-2 -->

              </div>
          </div>
          <!-- End::app-content -->

@endsection

@section('scripts')
            

@endsection