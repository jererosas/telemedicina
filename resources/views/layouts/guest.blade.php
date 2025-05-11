@extends('layouts.custom-master')

@section('styles')


@endsection

@section('content')

@section('error-body')

<body class="authentication-background">
    @endsection

    <div class="container">
        <div class="grid grid-cols-12 justify-center items-center authentication authentication-basic h-full">
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                <div class="box my-4">
                    <div class="box-body p-[3rem]">


                        {{ $slot }}

                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
        </div>
    </div>


    @endsection

    @section('scripts')

    <!-- Show Password JS -->
    <script src="{{asset('build/assets/show-password.js')}}"></script>

    @endsection