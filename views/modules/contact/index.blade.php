@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">

    @component('partials.components.title', ['breadcrumbs'=>'contact'])
        {{ trans('themes::contact.title') }}
    @endcomponent

        <div class="section-full content-inner bg-white contact-style-1 bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});">
            <div class="container">
                <div class="row">
                    <!-- right part start -->
                    <div class="col-md-4">
                        <div class="p-a30 m-b30 border-1 contact-area">
                            <h3 class="m-b20 m-t0">{{ setting('theme::company-name') }}</h3>
                            <ul class="no-margin">
                                @if(setting('theme::address'))
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <p>{!! setting('theme::address') !!}</p>
                                    </div>
                                </li>
                                @endif
                                @if(setting('theme::phone'))
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <div class="contents">
                                            <a href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a><br/>
                                            <a href="tel:{{ setting('theme::mobile') }}">{{ setting('theme::mobile') }}</a>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @if(setting('theme::fax'))
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-fax"></i></a> </div>
                                    <div class="icon-content">
                                        <div class="contents">
                                            <a href="tel:{{ setting('theme::fax') }}">{{ setting('theme::fax') }}</a>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @if(setting('theme::email'))
                                <li class="icon-bx-wraper left m-b40">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                                    </div>
                                </li>
                                @endif
                                <li class="icon-bx-wraper left m-b40">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-location-arrow"></i></a> </div>
                                    <div class="icon-content">
                                        <a target="_blank" href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat') }},{{ setting('contact::contact-map-lng') }}" class="site-button" style="padding: 10px !important; height: auto;">{{ trans('themes::contact.buttons.navigation') }}</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="m-t20">
                                @include('partials.components.socials', ['class'=>'dez-social-icon border dez-social-icon-lg', 'link_class'=>' bg-primary'])
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            <h3 class="m-t0">{{ trans('themes::contact.write us') }}</h3>
                            @include('contact::form')
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{ trans('themes::contact.our location') }}</h3>
                        @include('contact::map')
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

