@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'blog.author'])
        {{ trans('themes::blog.author posts', ['author'=>$author->fullname]) }}
    @endcomponent
@endsection

@section('blog.content')

    <div id="masonry" class="dez-blog-grid-2">
        @foreach($posts as $post)
        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
            @include('blog::partials._post')
        </div>
            @unset($post)
        @endforeach
    </div>

    <div class="pagination-bx col-lg-12 clearfix ">
        {!! $posts->links('partials.components.pagination') !!}
    </div>

@endsection