<div class="section-full bg-white content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="heading-top">{{ trans('themes::theme.title.welcome', ['company'=>setting('theme::company-name')]) }}</h2>
            <div class="circle-sap bg-primary"></div>
            <h2 class="heading-bottom">{{ trans('themes::theme.title.slogan') }}</h2>
        </div>
        <div class="section-content">
            <div class="owl-carousel treatments">
                @foreach($pages as $page)
                <div class="item">
                    <div class="abouts-2">
                        <div class="dez-media"> <a href="{{ $page->url }}"><img src="{{ $page->present()->firstImage(270,200,'fit',80) }}" alt="{{ $page->title }}"></a> </div>
                        <div class="about-info p-a25 text-center">
                            <h4 class="dez-title m-t0 m-b10"><a href="#" class="font-weight-600">{{ $page->title }}</a></h4>
                            <div class="dez-separator bg-primary"></div>
                            <p>{{ Str::words(strip_tags($page->body), 15) }}</p>
                            <a href="{{ $page->url }}" class="site-button radius-xl outline outline-2">{{ trans('themes::theme.buttons.details') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('js-inline')
    <script>
        $(document).ready(function () {
            $('.treatments').owlCarousel({
                items: 4,
                nav: false,
                dots: false,
                loop: true,
                autoplay:true,
                autoplayTimeout: 4000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    },
                    1200:{
                        items:4
                    }
                }
            });
        });
    </script>
@endpush