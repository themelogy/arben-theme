@php
    $pages         = $page->children()->orderBy('position')->paginate(@$page->settings->list_per_page ?? 6);
    $grid_size     = @$page->settings->list_grid ?? 3;
    $chunk_size    = ceil(12/$grid_size);
    $column_size   = is_float(12/$grid_size) ? $grid_size : $grid_size;
    $column_div    = ceil(12 % $grid_size);
@endphp
@if($pages->count()>0)
<div class="container">
    @if(@$page->settings->show_content)
    <div class="row">
        <div class="col-md-12">
            @include('page::partials.image', ['page'=>$page])
        </div>
    </div>
    <div class="row m-b30">
        <div class="col-md-12">
            @pageTags($page, 5)
        </div>
    </div>
    @endif
    @if(@$page->settings->list_type == 'list')
        <div class="row">
            @foreach($pages as $page)
            <div class="thumbnail col-md-12">
                @if($image = $page->present()->firstImage(200,150,'fit',80))
                    <img class="pull-left p-r20" src="{{ $image }}" alt="{{ $page->title }}">
                @endif
                <div class="caption">
                    <h4 class="title m-t0">{{ $page->title }}</h4>
                    <div class="content">
                        {!! Str::words(strip_tags($page->body),30) !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        @foreach($pages->chunk($chunk_size) as $chunk)
            <div class="row">
                @foreach($chunk as $page)
                    <div class="col-md-@if($loop->first){{ $column_size }}@elseif($loop->last && $column_div){{ $column_div }}@else{{ $column_size }}@endif">
                        <div class="thumbnail content-page-list">
                            <a href="{{ $page->url }}">
                                @if($image = $page->present()->firstImage(600,250,'fit',80))
                                    <img src="{{ $image }}" alt="{{ $page->title }}">
                                @endif
                                <div class="caption">
                                    <h5 class="font-16 title">{{ $page->title }}</h5>
                                    <div class="content">
                                        {!! Str::words(strip_tags($page->body),15) !!}
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-md-12">
            {!! $pages->links('partials.components.pagination') !!}
        </div>
    </div>
</div>
@endif