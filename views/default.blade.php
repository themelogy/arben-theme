@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">
        @component('partials.components.title', ['breadcrumbs'=>'page'])
            {{ $page->title }}
        @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                @includeWhen($page->parent && @$page->parent->settings->show_menu && !@$page->settings->full_page, 'page::page-with-sidebar', ['page'=>$page])
                                @includeWhen($page && @$page->settings->list_page, 'page::page-list', ['page'=>$page])
                                @includeWhen($page && !@$page->settings->list_page && !@$page->parent->settings->show_menu, 'page::page', ['page'=>$page])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
