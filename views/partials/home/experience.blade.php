<div class="section-full bg-white experience-spa-box">
    <div class="container-fluid">
        <div class="row equal-wraper3">
            <div class="col-md-12 col-sm-2 col-lg-2 p-l0 hidden-md hidden-sm hidden-xs"></div>
            <div class="col-md-12 col-lg-10 col-sm-12 p-lr0">
                <div class="callout-box experience-spa">
                    <img src="{{ Theme::url('images/skew/moving-bg2.svg') }}"
                         data--200-bottom-top="transform: translateY(50px);"
                         data-top="transform: translateY(-10px);" alt=""/>
                    <div class="callout-content ">
                        <div class="text-white max-w800 m-auto text-center m-b50">
                            <h2 class="spa-title-head text-fly">{{ trans('themes::page.title.why us') }}</h2>
                            {!! Block::get('neden-biz') !!}
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="1.50s" data-wow-delay="0.1s">
                                <div class="icon-bx-wraper center bg-white" data-tilt="">
                                    <div class="icon-content">
                                        <p class="font-16">{{ strip_tags(Block::get('beauty-expert')) }}</p>
                                        <div class="icon-md m-b15">
                                            <i class="fa fa-trophy text-primary"></i>
                                        </div>
                                        <h5 class="dez-tilte font-18">{{ trans('themes::page.title.beauty expert') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="1.50s" data-wow-delay="0.5s">
                                <div class="icon-bx-wraper center bg-white" data-tilt="">
                                    <div class="icon-content">
                                        <p class="font-16">{{ strip_tags(Block::get('satisfaction')) }}</p>
                                        <div class="icon-md m-b15">
                                            <i class="fa fa-smile-o text-primary"></i>
                                        </div>
                                        <h5 class="dez-tilte font-18">{{ trans('themes::page.title.satisfaction') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="1.50s" data-wow-delay="0.9s">
                                <div class="icon-bx-wraper center bg-white" data-tilt="">
                                    <div class="icon-content">
                                        <p class="font-16">{{ strip_tags(Block::get('natural')) }}</p>
                                        <div class="icon-md m-b15">
                                            <i class="fa fa-leaf text-primary"></i>
                                        </div>
                                        <h5 class="dez-tilte font-18">{{ trans('themes::page.title.natural') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>