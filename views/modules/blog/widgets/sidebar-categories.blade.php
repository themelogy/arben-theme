@if($categories->count()>0)
<div class="widget widget_categories">
    <h4 class="widget-title">{{ trans('blog::category.title.category') }}</h4>
    <ul>
        @foreach($categories as $category)
        <li><a href="{{ $category->url }}">{{ $category->name }}</a> ({{ $category->posts()->count() }})</li>
        @endforeach
    </ul>
</div>
@endif