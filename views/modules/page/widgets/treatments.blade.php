@if($pages->count()>0)
<div class="bg-white bgeffect" style="background-image:url({{ Theme::url('images/skew/services.png') }}); background-repeat:no-repeat; background-size:contain; background-position:left;" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;">
    <div class="section-full content-inner spa-service">
        <div class="container">
            <div class="section-content row">
                <div class="spa-service-carousel mfp-gallery gallery owl-btn-center-lr owl-btn-spa-lr owl-spa-btn">
                    @foreach($pages as $page)
                    <div class="item">
                        <div class="spa-service-box">
                            <div class="icon-bx-wraper center">
                                <div class="icon-xl text-primary m-b10"><a href="{{ $page->url }}" class="icon-cell text-primary">@if(isset($page->settings->icon))<i class="{{ $page->settings->icon }}"></i>@endif</a></div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase font-weight-600 font-18">{{ $page->title }}</h3>
                                    <p>{!! Str::words(strip_tags($page->body), 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif