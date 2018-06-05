@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'blog.tag'])
        {{ trans('blog::post.title.tag', ['tag'=>$tag->name]) }}
    @endcomponent
@endsection

@section('blog.content')

    <div id="masonry" class="dez-blog-grid-2">
        @foreach($posts as $post)
        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
            @include('blog::partials._post')
        </div>
        @endforeach
    </div>

    <div class="pagination-bx col-lg-12 clearfix ">
        {!! $posts->links('partials.components.pagination') !!}
    </div>

@endsection