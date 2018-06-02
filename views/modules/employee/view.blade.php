@extends('layouts.master')

@section('header')
    @include('partials.header', ['header_class'=>'site-header tb', 'navbar_class'=>'dark'])
@endsection

@section('content')

    <div class="page-content bg-white">

        @component('partials.components.title', ['breadcrumbs'=>'employee.view'])
            {{ $employee->fullname }}
        @endcomponent

        <div class="content-block">
            <div class="section-full bg-white content-inner bgeffect" style="background-image:url({{ Theme::url('images/background/bg12.jpg') }});" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-thumbnail image-hover"
                                     src="{{ $employee->present()->firstImage(800,null,'resize',80) }}"
                                     alt="{{ $employee->fullname }}">
                                <h1>{{ $employee->fullname }}</h1>
                                <p class="highlight">{{ $employee->position }}</p>
                                <ul class="social-icons list-inline">
                                    <?php $socials = ['facebook', 'instagram', 'twitter', 'google', 'linkedin']; ?>
                                    @foreach($socials as $social)
                                        @if(!empty($employee->{$social}))
                                            <li><a class="soc-{{ $social }}" href="{{ $employee->{$social} }}" title="{{ ucfirst($social) }}" data-toggle="tooltip"><i class="fa fa-{{ $social }}"></i></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                                <ul class="list-group no-bullets">
                                    @if($employee->address)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="highlight size_small">
                                                        <i class="rt-icon2-location-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{ trans('employee::employees.form.address') }}:</h4>
                                                    {!! $employee->address !!}
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @if($employee->phone)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="highlight size_small">
                                                        <i class="rt-icon2-phone-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{ trans('employee::employees.form.phone') }}:</h4>
                                                    {!! $employee->phone !!}
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @if($employee->fax)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="highlight size_small">
                                                        <i class="rt-icon2-printer2"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{ trans('employee::employees.form.fax') }}:</h4>
                                                    {{ $employee->fax }}
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @if($employee->email)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="highlight size_small">
                                                        <i class="rt-icon2-mail2"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Email:</h4>
                                                    <a href="mailto:{{ Html::email($employee->email) }}">{{ Html::email($employee->email) }}</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                </ul>

                            </div>

                            <div class="col-md-8">

                                @if($employee->description)
                                    <div class="description m-bot-30">
                                        {!! $employee->description !!}
                                    </div>
                                @endif

                                @if($employee->biography || $employee->skills)
                                <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        @if($employee->biography)
                                            <li class="active">
                                                <a href="#tab1" role="tab"
                                                   data-toggle="tab">{{ trans('themes::employee.biography') }}</a>
                                            </li>
                                        @endif
                                        @if($employee->skills)
                                            <li>
                                                <a href="#tab2" role="tab"
                                                   data-toggle="tab">{{ trans('themes::employee.skills') }}</a>
                                            </li>
                                        @endif
                                        @if($employee->user()->exists())
                                            @if(count($articles)>0)
                                                <li>
                                                    <a href="#tab3" role="tab"
                                                       data-toggle="tab">{{ trans('themes::employee.articles') }}</a>
                                                </li>
                                        @endif
                                    @endif
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content top-color-border bottommargin_30">
                                        @if($employee->biography)
                                            <div class="tab-pane fade in active" id="tab1">
                                                {!! $employee->biography !!}
                                            </div>
                                        @endif
                                        @if($employee->skills)
                                            <div class="tab-pane fade" id="tab2">
                                                {!! $employee->skills !!}
                                            </div>
                                        @endif
                                        @if($employee->user()->exists())
                                            @if(count($articles)>0)
                                                <div class="tab-pane fade" id="tab3">
                                                    <ul class="media-list">
                                                        @foreach($articles as $article)
                                                            <li class="media">
                                                                <a class="media-left" href="{{ $article->url }}">
                                                                    <img class="img-thumbnail media-object" src="{{ $article->present()->firstImage(80,80,'fit',80) }}" alt="{{ $article->title }}">
                                                                </a>
                                                                <div class="media-body">
                                                                    <p class="post-date media-heading">
                                                                        <i class="rt-icon2-calendar2 highlight2"></i> {{ $article->created_at->formatLocalized("%d %B %Y") }}
                                                                    </p>
                                                                    <h4 class="m-bot-5"><a href="{{ $article->url }}">{{ $article->title }}</a></h4>
                                                                    <p>{!! Str::words(strip_tags($article->intro),15) !!}</p>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                        @endif
                                    @endif
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection