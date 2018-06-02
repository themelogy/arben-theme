@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')
    <div class="page-content bg-white">

        @component('partials.components.title', ['breadcrumbs'=>'hr.position.index'])
            {{ trans('themes::hr.title.position') }}
        @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="section-padding md-p-top-bot-50 section-page">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ trans('hr::positions.form.reference_no') }}</th>
                                                    <th>{{ trans('hr::positions.form.name') }}</th>
                                                    <th>{{ trans('hr::positions.form.personal_number') }}</th>
                                                    <th>{{ trans('hr::positions.form.position.city') }}</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($positions as $position)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $position->reference_no }}</td>
                                                        <td>{{ $position->name }}</td>
                                                        <td>{{ $position->personal_number }}</td>
                                                        <td>{{ $position->present()->position('city') }}</td>
                                                        <td><a class="btn btn-default" href="{{ route('hr.position.view', [$position->slug]) }}">İncele</a>  <a class="btn btn-primary" href="{{ route('hr.application.form', ['position_id'=>$position->id]) }}">Başvuru Yap</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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