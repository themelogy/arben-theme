@php $randomize = collect([1,6,7]) @endphp
<div class="dez-bnr-inr tb overlay-white-light" style="background-image:url({{ Theme::url('images/banner/bnr'.$randomize->random().'.jpg') }});">
    <div class="container">
        <div class="dez-bnr-inr-entry">
            @if(isset($slot))
            <h1 class="text-white">{{ $slot }}</h1>
            @endif
            @if(isset($breadcrumbs))
            <div class="breadcrumb-row">
                {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
            </div>
            @endif
        </div>
    </div>
</div>