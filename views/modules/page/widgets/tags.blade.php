@if($tags->count()>0)
    <div class="dez-divider divider-1px bg-gray-dark text-gray-dark icon-center"><i class="fa fa-tags"></i></div>
    @foreach($tags as $tag)
        <a class="btn btn-default btn-xs" href="{{ route('page.tag', [$tag->slug]) }}" role="button">{{ $tag->name }}</a>
    @endforeach
@endif