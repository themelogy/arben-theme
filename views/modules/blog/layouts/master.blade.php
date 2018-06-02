@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">
        @yield('blog.title')

        <div class="content-area bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            @yield('blog.content')
                        </div>
                    </div>
                    <div class="col-md-3">
                        <aside class="side-bar">
                            @blogCategories(20,'sidebar-categories')
                            @blogLatestPosts(3, 'sidebar-latest-posts')
                            @if(isset($post))
                                @blogTags($post, 5, 'sidebar-tags')
                            @elseif(isset($posts))
                                @foreach($posts as $post)
                                    @blogTags($post, 1, 'sidebar-tags')
                                @endforeach
                            @endif
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection