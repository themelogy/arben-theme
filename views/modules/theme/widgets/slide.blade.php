@if($slides->count()>0)
<div class="main-slider style-two default-banner relative" id="home">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper" data-alias="duotone192"
                 data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_1175_1" class="rev_slider" style="display:none;" data-version="5.3.0.2">
                    <ul>
                        @foreach($slides as $slide)
                        <li data-index="rs-{{ $loop->iteration }}" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="{{ $slide->present()->firstImage(100,100,'fit',70) }}" data-rotate="0" data-fstransition="fade"
                            data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ $slide->present()->firstImage(1600,950,'fit',70) }}" alt="" data-bgposition="center center"
                                 data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                 data-scalestart="100" data-scaleend="110" data-rotatestart="0"
                                 data-rotateend="0" data-offsetstart="-500 0" data-offsetend="500 0"
                                 data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                            <!-- LAYERS -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['0','0','0','0']"
                                 data-width="full" data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                            @if(!empty($slide->sub_title))
                            <div class="tp-caption   rs-parallaxlevel-4"
                                 id="slide-100-layer-2"
                                 data-x="['right','right','right','right']"
                                 data-hoffset="['-50','0','70','40']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-120','-0','-70','-75']"
                                 data-fontsize="['45','45','40','20']"
                                 data-lineheight="['70','70','50','30']"
                                 data-width="['720','640','480','300']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:'Nunito',sans-serif;border-width:0px; font-weight:700;">
                                {!! $slide->sub_title !!}
                            </div>
                            @endif

                            @if(!empty($slide->content))
                            <div class="tp-caption   rs-parallaxlevel-4"
                                 id="slide-100-layer-3"
                                 data-x="['right','right','right','right']"
                                 data-hoffset="['-50','0','70','40']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-50','57','39','0']"
                                 data-fontsize="['17','17','17','15']"
                                 data-lineheight="['26','26','26','24']"
                                 data-width="['720','480','480','300']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 6; min-width: 720px; max-width: 720px; white-space: normal;line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Nunito',sans-serif;border-width:0px;">
                                {!! $slide->content !!}
                            </div>
                            @endif

                            @if($slide->link_type != 'none')
                            <div class="tp-caption rs-parallaxlevel-4"
                                 id="slide-100-layer-4"
                                 data-x="['right','right','right','right']"
                                 data-hoffset="['-50','0','70','40']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['20','159','141','85']"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-width="['720','480','480','300']"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 9;"><a target="{{ $slide->link->target }}" href="{{ $slide->link->url }}" class="site-button white">{{ $slide->link->title }}</a></div>
                            @endif

                            @if(!empty($slide->sub_title))
                                @if(isset($performance))
                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-7"
                                         id="slide-100-layer-5"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['500','500','200','200']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['400','400','300','200']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="image"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 8;border-width:0px;">
                                        <div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px"
                                             data-origin="50% 50%">
                                            <img src="{{ Theme::url('images/main-slider/peralax.png') }}" alt=""
                                                 data-ww="['590px','479px','383px','287px']"
                                                 data-hh="['616px','500px','400px','300px']" width="590" height="616"
                                                 data-no-retina>
                                        </div>
                                    </div>
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                                         id="slide-100-layer-6"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['1100','948','948','948']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['0','0','0','0']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="image"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"opacity:0;","speed":200,"to":"o:5;","delay":200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 8;border-width:0px;">
                                        <div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px"
                                             data-origin="50% 50%">
                                            <img src="{{ Theme::url('images/main-slider/peralax2.png') }}" alt=""
                                                 data-ww="['376px','376px','376px','376px']"
                                                 data-hh="['331px','331px','331px','331px']" width="376" height="331"
                                                 data-no-retina>
                                        </div>
                                    </div>
                                @endif

                                <div class="header-set">
                                    <img src="{{ Theme::url('images/skew/header-skew.svg') }}" alt=""/>
                                </div>
                                <div class="slider-set">
                                    <img src="{{ Theme::url('images/skew/slider-skew.svg') }}" alt=""/>
                                </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    <div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>

                </div>
            </div>
        </div>
    </div>
</div>

@push('css-stack')
    {!! Theme::style('vendor/revolution/css/settings.css') !!}
    {!! Theme::style('vendor/revolution/css/navigation.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('vendor/revolution/js/jquery.revolution.min.js') !!}
    {!! Theme::script('js/rev.slider.js') !!}
@endpush

@push('js-inline')
    <script>
        jQuery(document).ready(function () {
            'use strict';
            dz_rev_slider_1();
        });
    </script>
@endpush

@endif