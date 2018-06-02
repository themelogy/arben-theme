@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">

        @component('partials.components.title', ['breadcrumbs'=>'hr.position.view'])
            {{ $position->name }} - {{ $position->reference_no }}
        @endcomponent


    </div>

    <div class="content-block">
        <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="section-padding md-p-top-bot-50 section-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">{{ trans('hr::positions.form.qualification') }}</div>
                                            <div class="panel-body">
                                                {!! $position->qualification !!}
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">{{ trans('hr::positions.form.job_description') }}</div>
                                            <div class="panel-body">
                                                {!! $position->job_description !!}
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">{{ trans('hr::positions.title.personal_criteria') }}</div>
                                            <div class="panel-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.criteria.experience') }}</th>
                                                        <td>{{ $position->present()->criteria('experience') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.criteria.education') }}</th>
                                                        <td>{{ $position->present()->criteria('education') }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">{{ trans('hr::positions.title.position_information') }}</div>
                                            <div class="panel-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.personal_number') }}</th>
                                                        <td>{{ $position->personal_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.position.level') }}</th>
                                                        <td>{{ $position->present()->position('level') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.position.worktime') }}</th>
                                                        <td>{{ $position->present()->position('worktime') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.position.department') }}</th>
                                                        <td>{{ $position->present()->position('department') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">{{ trans('hr::positions.form.position.city') }}</th>
                                                        <td>{{ $position->present()->position('city') }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <a class="btn btn-default" href="{{ route('hr.application.form', ['position_id'=>$position->id]) }}">Başvuru Yap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection