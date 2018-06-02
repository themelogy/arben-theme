@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">

        @component('partials.components.title', ['breadcrumbs'=>'employee.index'])
            {{ trans('themes::employee.title') }}
        @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        @foreach($employees->chunk(3) as $chunk)
                            <div class="row">
                                @foreach($chunk as $employee)
                                    @include('employee::partials.employee')
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection