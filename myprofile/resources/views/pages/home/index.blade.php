@extends('layouts.default')

@section('content')

		@include('pages.home.personal')

        <!-- about -->
        @include('pages.home.about')
        <!-- /about -->

        <!-- services -->
        @include('pages.home.services')
        <!-- services -->

        <!--work-experience-->
        @include('pages.home.experience')
        <!--//work-experience-->

        <!-- portfolio -->
        @include('pages.home.portfolio')
        <!-- //portfolio -->

        <!-- /header -->
        @include('pages.home.contactme')

@endsection

@push('styles')
    @include('pages.home.css_index')
@endpush

@push('scripts')
    @include('pages.home.script_index')
@endpush