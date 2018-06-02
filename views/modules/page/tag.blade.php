@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">
        @component('partials.components.title', ['breadcrumbs'=>'page.tag'])
            {!! trans('themes::tags.tag', ['tag'=>$tag->name]) !!}
        @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            @foreach($pages->chunk(3) as $chunks)
                                <div class="row">
                                    @foreach($chunks as $page)
                                        <div class="col-md-4 col-xs-12">
                                            <div class="thumbnail content-page-list">
                                                <a href="{{ $page->url }}">
                                                    <img class="rounded" src="{{ $page->present()->firstImage(356, 150, "fit", 50) }}" alt="{{ $page->title }} - {{ $tag->name }}" />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="font-16 title"><a href="{{ $page->url }}">{{ $page->title }}</a></h4>
                                                    <div class="content">
                                                        <p>{!! Str::words(strip_tags($page->body), 30) !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection