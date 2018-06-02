@inject("menuService", "Modules\Menu\Services\MenuService")
<footer class="site-footer bg-img-fix home-footer-2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 m-b20">
                    <h3 class="font-weight-700 align-left"><img src="{{ Theme::url('images/logo/arben-h.svg') }}" alt="{{ setting('core::site-name-mini') }}" style="max-height:75px;" /></h3>
                    <ul class="add-list">
                        <li><p>{!! setting('theme::address') !!}</p></li>
                        <li><a href="tel:{!! setting('theme::phone') !!}"><i class="fa fa-phone m-r5"></i> {!! setting('theme::phone') !!}</a></li>
                        <li><a href="tel:{!! setting('theme::mobile') !!}"><i class="fa fa-fax m-r5"></i> {!! setting('theme::mobile') !!}</a></li>
                        <li><a href="mailto:{{ Html::email(setting('theme::email')) }}"><i class="fa fa-envelope m-r5"></i> {{ Html::email(setting('theme::email')) }}</a></li>
                    </ul>
                    <h2 class="font-weight-700 font-20 m-b5">{{ trans('themes::contact.follow us') }}</h2>
                    @include('partials.components.socials', ['class'=>'dez-social-icon dez-social-icon-lg', 'link_class'=>'border-2 radius-xl text-primary'])
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-12 col-xs-12">
                    <h3 class="font-weight-700 font-20">{{ $menuService->title('corporate') }}</h3>
                    {!! Menu::render('corporate', \Themes\Arben\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <h3 class="font-weight-700 font-20">{{ $menuService->title('services') }}</h3>
                    {!! Menu::render('services', \Themes\Arben\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    @findChildren('kampanyalar', 'campaign')
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="text-center font-12">
                <span>{!! trans('themes::theme.footer.copyrights', ['date'=>\Carbon\Carbon::now()->format('Y'), 'company'=>setting('theme::company-name')]) !!}</span>
                <a target="_blank" href="http://www.qbicom.com.tr" class="text-primary"> Qbicom Digital</a>
                <p class="font-10">{{ trans('themes::theme.footer.notice') }}</p>
            </div>
        </div>
    </div>
</footer>