<div class="widget recent-posts-entry">
    <h4 class="widget-title">{{ trans('themes::blog.latest') }}</h4>
    <div class="widget-post-bx">
        @foreach($posts as $post)
        <div class="widget-post clearfix">
            <div class="dez-post-media"> <img src="{{ $post->present()->firstImage(90,72,'fit',80) }}" alt="{{ $post->title }}"> </div>
            <div class="dez-post-info">
                <div class="dez-post-header">
                    <h6 class="post-title">{{ $post->title }}</h6>
                </div>
                <div class="dez-post-meta">
                    <ul>
                        <li class="post-date font-12">{{ $post->created_at->formatLocalized('%d %B %Y') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>