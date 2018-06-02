@if($pages->count()>0)
<div class="section-full bg-white content-inner spa-service particles" id="beauty-care">
    <div class="container">
        <div class="row equal-wraper">
            <div class="col-md-7 col-sm-9 equal-col">
                <div class="section-head">
                    <h2 class="text-primary spa-title-head">{{ trans('themes::page.title.popular') }}</h2>
                    <div class="dez-separator spa bg-primary"></div>
                </div>
                <div class="beauty-care owl-spa-btn">
                    @foreach($pages as $page)
                    <div class="item dez-box spa-care-box">
                        <div class="dez-media">
                            <div class="media-img"><a href="#"><img src="{{ $page->present()->firstImage(250,255,'fit',80) }}" alt="{{ $page->title }}"></a></div>
                            <p>{!! Str::words(strip_tags($page->body),20) !!}</p>
                        </div>
                        <div class="dez-info">
                            <div class="box-price">
                                <h2 class="min-title">{{ $page->title }}</h2>
                            </div>
                            <div class="appoint-btn m-t20 text-left">
                                <a href="{{ $page->url }}" class="site-button button-lg radius-xl gradient fley">{{ trans('themes::theme.buttons.details') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-sm-3 dis-tbl equal-col">
                <div class="dis-tbl-cell-b wow fadeIn" data-wow-duration="1.80s" data-wow-delay="0.50s">
                    <img src="{{ Theme::url('images/populer-guzellik-hizmetleri-1.png') }}" alt="popüler güzellik hizmetleri"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endif