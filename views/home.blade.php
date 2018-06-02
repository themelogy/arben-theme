@php
seo_helper()->setSiteName('');
@endphp

@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="page-content">
        @themeSlide('anasayfa')
        <div class="content-block">
            @pageFindByOptions('settings.treatments', 'treatments-2')
            @pageFindByOptions('settings.popular', 'home-popular')
            @pageFindByOptions('settings.new_treatment', 'new-treatments')
            @include('partials.home.experience')
            @blogLatestPosts(3, 'home-latest-posts')
        </div>
    </div>
@endsection