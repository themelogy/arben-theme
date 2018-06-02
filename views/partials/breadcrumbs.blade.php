@if ($breadcrumbs)
    <ul class="list-inline">
        <li><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li>
                    <a href="{{ $crumb->url }}">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</a>
                </li>
            @else
                <li class="active">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</li>
            @endif
        @endforeach
    </ul>
@endif