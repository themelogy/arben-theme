<header class="{{ $header_class ?? 'site-header header-transparent spa-header fullwidth' }}">
    <div class="sticky-header main-bar-wraper">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="dez-topbar-right topbar-social">
                        @include('partials.components.socials', ['link_class'=>'site-button-link hover'])
                    </div>
                    <div class="dez-topbar-right">
                        <ul>
                            <li class="m-r10"><i class="fa fa-envelope-o m-r5"></i> {{ setting('theme::email') }}</li>
                            <li><i class="fa fa-phone m-r5"></i> {{ setting('theme::phone') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <div class="logo-header mostion page">
                    <a href="{{ LaravelLocalization::getLocalizedURL(locale(), url('/')) }}">
                        <img src="{{ Theme::url('images/logo/arben.svg') }}" data-img="{{ Theme::url('images/logo/arben.svg') }}" data-src="{{ Theme::url('images/logo/arben-h.svg') }}" alt="{{ setting('theme::company-name') }}">
                    </a>
                </div>
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                @if(isset($search))
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="dez-quik-search bg-primary ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="{{ trans('themes::theme.header.search') }}">
                        <span id="quik-search-remove"><i class="flaticon-cancel"></i></span>
                    </form>
                </div>
                @endif
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse {{ $navbar_class ?? '' }}">
                    {!! Menu::render('header', \Themes\Arben\Presenter\HeaderSmartMenuPresenter::class) !!}
                </div>
            </div>
        </div>
    </div>
</header>

@push('js-stack')
    {!! Asset::add(Theme::url('vendor/smartmenus/jquery.smartmenus.js')) !!}
@endpush

@push('js-inline')
    <script>
        (function(){
            $(function() {
                $('#main-menu').smartmenus({
                    mainMenuSubOffsetX: 0,
                    mainMenuSubOffsetY: 5,
                    subMenusSubOffsetX: 0,
                    subMenusSubOffsetY: -2
                });
            });
        })(jQuery);
    </script>
@endpush