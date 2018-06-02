@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'blog.view'])
        {{ $post->title }}
    @endcomponent
@endsection

@section('blog.content')
    <div class="blog-post blog-single">
        <div class="dez-post-title ">
            <h4 class="post-title"><a href="#">{{ $post->title }}</a></h4>
        </div>
        <div class="dez-post-meta m-b20">
            <ul>
                <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $post->created_at->formatLocalized('%d %B') }}</strong> <span> {{ $post->created_at->format('Y') }}</span> </li>
                @if(isset($post->category))
                    <li class="post-category"><i class="fa fa-list-alt"></i><a href="{{ $post->category->url }}">{{ $post->category->name }}</a> </li>
                @endif
            </ul>
        </div>
        <div class="dez-post-text">
            <div class="thumbnail pull-left m-r20 m-b20">
                <img class="img-responsive" src="{{ $post->present()->firstImage(400,null,'resize',80) }}" alt="{{ $post->title }}">
            </div>
            {!! $post->content !!}
        </div>
        @if($post->tags->count()>0)
            <div class="dez-post-tags clear">
                <div class="post-tags">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection