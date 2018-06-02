@if($children->count()>0)
    <h3 class="font-weight-700 font-20">{{ $page->title }}</h3>
    <div class="promotions owl-carousel">
        @foreach($children as $child)
            <div class="item">
                <img src="{{ Theme::url('images/product.jpg') }}" alt="{{ $child->title }}">
                <a href="{{ $child->url }}" class="site-button font-14">{{ $child->title }}</a>
            </div>
        @endforeach
    </div>

    @push('js-inline')
        <script>
            $(document).ready(function () {
                $('.promotions').owlCarousel({
                    items: 1,
                    nav: false,
                    dots: false
                });
            });
        </script>
    @endpush
@endif