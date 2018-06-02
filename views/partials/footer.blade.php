<footer class="bg-white spa-footer p-t100" id="footer1">
    <img src="{{ Theme::url('images/skew/footer.svg') }}" alt=""/>
    <div class="footer-top text-black">
        <div class="container">
            <div class="row equal-wraper2">
                <div class="col-md-4 col-sm-4 ">
                    <div class="ft-gallery-box">
                        <div class="ft-gallery-media beauty-care owl-spa-btn">
                            <div class="item  wow fadeInDown" data-wow-duration="1.50s" data-wow-delay="0.1s"><img src="{{ Theme::url('images/gallery/ft-gallery/pic1.jpg') }}" alt=""/></div>
                            <div class="item  wow fadeInDown" data-wow-duration="1.50s" data-wow-delay="0.1s"><img src="{{ Theme::url('images/gallery/ft-gallery/pic1.jpg') }}" alt=""/></div>
                        </div>
                    </div>

                    <div class="text-center m-t100">
                        <h2>{{ trans('themes::contact.follow us') }}</h2>
                        @include('partials.components.socials', ['class'=>'list-inline', 'link_class'=>'site-button circle', 'icon_class'=>'text-white'])
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center equal-col">
                    <h2 class="m-b30 text-white min-title">ButterFly Location</h2>
                    <img src="{{ Theme::url('images/product/product/pic1.png') }}" alt="" class="wow zoomIn" data-wow-duration="1.50s" data-wow-delay="0.1s"/>
                    <h2 class="min-title m-b15"><a href="#" class="site-button-link"><span class="text-primary">Purchase Now</span></a>
                    </h2>
                    <p>Special offers - 15% offer on Spa <br/> <a href="#"><span class="text-primary">Read More</span></a></p>
                </div>
                <div class="col-md-4 col-sm-4 text-center equal-col dis-tbl">
                    <div class="widget widget_getintuch dis-tbl-cell">
                        <h2 class="m-b30 text-white min-title">{{ setting('core::site-name-mini') }}</h2>
                        <p class="p-lr20">ButterFly & Beauty Lab 2145 - 007 - 1566 No 45, Season Street, Livingstone
                            LA, Inc - 4502
                            <a href="#"><span class="text-primary">info@example.com</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg"></div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center font-10"><span>{!! trans('themes::theme.footer.copyrights', ['date'=>\Carbon\Carbon::now()->format('Y'), 'company'=>setting('theme::company-name')]) !!}</span>
                </div>

            </div>
        </div>
    </div>
</footer>