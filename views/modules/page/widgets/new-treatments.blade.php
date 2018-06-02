<div class="section-full content-inner bg-white bgeffect"
     style="background:url({{ Theme::url('images/background/bg13.jpg') }}) no-repeat center center fixed; background-size: cover;"
     data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-head">
                <h2 class="text-primary spa-title-head ">{{ trans('themes::page.title.new') }}</h2>
                <div class="dez-separator spa bg-primary"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="time-line clearfix">
                    @foreach($pages as $page)
                        @php $position = $loop->iteration % 2 ? 'left' : 'right'; @endphp
                        <div class="line-{{ $position }} clearfix">
                            <div class="line-{{ $position }}-box">
                                <div class="line-content-box wow fadeIn{{ ucfirst($position) }}" data-wow-duration="1.80s" data-wow-delay="0.25s">
                                    <h2 class="min-title text-uppercase text-primary m-t0 m-b15 font-24"><a href="{{ $page->url }}">{{ $page->title }}</a></h2>
                                    <p class="font-16">{!! Str::words(strip_tags($page->body), 10) !!}</p>
                                </div>
                                <div class="line-num gradient">{{ $loop->iteration }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>