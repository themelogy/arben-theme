<div class="col-sm-4">
    <div class="thumbnail">
        <a href="{{ $employee->url }}">
            <img src="{{ $employee->present()->firstImage(500,400,'fit',80) }}"
                 alt="{{ $employee->fullname }}">
        </a>
        <div class="caption">
            <h3>
                <a href="{{ $employee->url }}">{{ $employee->fullname }}</a>
            </h3>
            <p>{{ $employee->position }}</p>
            <p class="text-center social-icons">
                <?php $socials = ['facebook', 'instagram', 'twitter', 'google', 'linkedin']; ?>
                @foreach($socials as $social)
                    @if(isset($employee->{$social}))
                        <a class="soc-{{ $social }}" href="{{ $employee->{$social} }}" title="{{ ucfirst($social) }}" data-toggle="tooltip">#</a>
                    @endif
                @endforeach
            </p>
        </div>
    </div>
</div>