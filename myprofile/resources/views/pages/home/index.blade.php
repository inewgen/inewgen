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

        <!-- top-grids -->
        @include('pages.home.blogs')
        <!-- top-grids -->

        <!-- /blog-pop-->
        @include('pages.home.blog_pop')
        <!-- //blog-pop-->

        <!-- /header -->
        @include('pages.home.contactme')

@endsection

@push('styles')
    @include('pages.home.css_index')
@endpush

@push('scripts')
    @include('pages.home.script_index')
@endpush