@php
    $theme = isset($theme) ? $theme : 'minima';
    $layout = 'vendor/jssocials/jssocials-theme-'. $theme .'.css';
@endphp
<div id="share" class="{{ $theme }}"></div>

@push('js-stack')
{!! Asset::add(Theme::url('vendor/jssocials/jssocials.min.js')) !!}
{!! Asset::add(Theme::url('vendor/jssocials/jssocials.css')) !!}
{!! Asset::add(Theme::url($layout)) !!}
@endpush

@push('js-inline')
<script>
    $(document).ready(function () {
        $("#share").jsSocials({
            shareIn: "popup",
            showLabel: false,
            showCount: "inside",
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
        });
    });
</script>
@endpush