@if($posts->count()>0)
<div class="section-full blog-1 bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="heading-top">{{ trans('themes::blog.latest') }}</h2>
            <div class="circle-sap bg-primary"></div>
            <h2 class="heading-bottom">{{ trans('themes::blog.slogan') }}</h2>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-b30">
                <div class="blog-post-2">
                    <div class="dez-post-media">
                        <a href="{{ $post->url }}"><img src="{{ $post->present()->firstImage(570,260,'fit',80) }}" alt="{{ $post->title }}"></a>
                    </div>
                    <div class="dez-post-info bg-white text-center p-a25">
                        <i class="fa fa-heart font-30 text-primary" aria-hidden="true"></i>
                        <h4 class="font-20"><a href="{{ $post->url }}">{{ $post->title }}</a></h4>
                        <p class="m-b10">
                            {!! Str::words(strip_tags($post->content),20) !!}
                        </p>
                        <span class="date text-gray-dark">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif