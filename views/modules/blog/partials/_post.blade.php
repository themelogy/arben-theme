<div class="blog-post blog-grid date-style-2">
    <div class="dez-post-media dez-img-effect zoom-slow">
        <a href="{{ $post->url }}"><img src="{{ $post->present()->firstImage(420,250,'fit',80) }}" alt="{{ $post->title }}"></a>
    </div>
    <div class="dez-post-info">
        <div class="dez-post-title ">
            <h4 class="post-title"><a href="{{ $post->url }}">{{ $post->title }}</a></h4>
        </div>
        <div class="dez-post-meta ">
            <ul>
                <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $post->created_at->formatLocalized('%d %b') }}</strong> <span> {{ $post->created_at->format('Y') }}</span> </li>
                @if(isset($post->category))
                <li class="post-category"><i class="fa fa-list-alt"></i><a href="{{ $post->category->url }}">{{ $post->category->name }}</a> </li>
                @endif
            </ul>
        </div>
        <div class="dez-post-text">
            {!! $post->intro !!}
        </div>
        <div class="dez-post-readmore">
            <a href="{{ $post->url }}" title="{{ trans('global.buttons.read more') }}" rel="bookmark" class="btn btn-default btn-xs">
                {{ trans('global.buttons.read more') }} <i class="fa fa-angle-double-right"></i>
            </a>
        </div>
        @if($post->tags->count()>0)
        <div class="dez-post-tags">
            <div class="post-tags">
                @foreach($post->tags as $tag)
                <a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>