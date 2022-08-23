@extends('admin.base.base')

@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include('admin.layout.header')
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        @yield('main_content')
                        {{-- Modals Starts --}}
                        @include('admin.modals.account')
                        @include('admin.modals.sub_admin.create')
                        @include('admin.modals.vendor.create')
                        {{-- end Modals --}}
                        @include('admin.layout.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
