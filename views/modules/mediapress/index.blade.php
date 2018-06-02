@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">

    @component('partials.components.title', ['breadcrumbs'=>'mediapress.index'])
        {{ trans('mediapress::mediapress.title.mediapress') }}
    @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-3 sidebar">
                                <h4>{{ trans('mediapress::media.form.media_type') }}</h4>
                                <ul class="list-group page-list">
                                    @foreach($mediaTypes as $key => $mediaType)
                                        <li class="list-group-item list-group-item-action"><a href="{{ route('mediapress.media.category', $key) }}">{{ $mediaType }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-9">
                                @foreach($medias as $media)
                                    <article class="post-wrapper m-bot-20">
                                        <span class="label label-default">{{ $media->brand }}</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive img-thumbnail" src="{{ $media->present()->media_image(240,140,'fit',50) }}" />
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="entry-title m-b5"><a href="{{ $media->present()->url }}">{{ $media->title }}</a></h3>
                                                <div class="date font-12 m-t0">{{ $media->release_at->formatLocalized('%d %B %Y') }}</div>
                                                <p>{!! Str::words(strip_tags($media->description), 20) !!}</p>
                                                <a class="browser-default btn btn-default btn-xs m-top-5" href="{{ $media->present()->url }}">{{ trans('global.buttons.read more') }}</a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection