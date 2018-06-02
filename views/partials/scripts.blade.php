{!! Asset::css() !!}
@stack('css-stack')
@stack('css-inline')

<!-- JavaScript  files ========================================= -->
{!! Theme::script('js/jquery.min.js') !!}
<!-- jquery.min js -->
{!! Theme::script('vendor/wow/wow.js') !!}
<!-- Wow Animation js -->
{!! Theme::script('vendor/bootstrap/js/bootstrap.min.js') !!}
<!-- bootstrap.min js -->

<!-- Form js -->

<!-- Form js -->
{!! Theme::script('vendor/magnific-popup/jquery.magnific-popup.min.js') !!}
<!-- magnific-popup js -->
{!! Theme::script('vendor/counter/waypoints-min.js') !!}
<!-- waypoints js -->
{!! Theme::script('vendor/counter/counterup.min.js') !!}
<!-- counterup js -->

{!! Theme::script('vendor/imagesloaded/imagesloaded.js') !!}
<!-- masonry  -->
{!! Theme::script('vendor/masonry/masonry-3.1.4.js') !!}
<!-- masonry  -->
{!! Theme::script('vendor/masonry/masonry.filter.js') !!}
<!-- masonry  -->

{!! Theme::style('vendor/owl-carousel/owl.carousel.css') !!}
{!! Theme::script('vendor/owl-carousel/owl.carousel.js') !!}
{!! Theme::script('js/dz.carousel.js') !!}

{!! Asset::js() !!}
@stack('js-stack')

<!-- Paroller Js -->
{!! Theme::script('js/custom.min.js') !!}

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Nunito:200,300,400,600,700,800,900:latin-ext',
                'Lato:100,200,300,400,500,600,700,800,900:latin-ext',
                'Montserrat:100,200,300,400,500,600,700,800,900:latin-ext',
                'Open Sans:300,400,600,700,800:latin-ext',
                'Roboto:100,300,400,500,700,900:latin-ext'
            ]
        },
        timeout: 2000
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

@stack('js-inline')