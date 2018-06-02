<ul class="{{ $class ?? '' }}">
    @foreach(['facebook' => 'facebook', 'twitter'=>'google-plus', 'google-plus'=>'google-plus', 'whatsapp'=>'whatsapp', 'linkedin'=>'linkedin', 'youtube'=>'youtube-play', 'instagram'=>'instagram'] as $sk => $sv)
        @if(setting('theme::'.$sk))
        <li><a target="_blank" href="{{ setting('theme::'.$sk) }}" class="{{ isset($link_class) ? $link_class : 'site-button-link' }} {{ $sk }}"><i class="fa fa-{{ $sv }} {{ $icon_class ?? '' }}"></i></a></li>
        @endif
    @endforeach
</ul>