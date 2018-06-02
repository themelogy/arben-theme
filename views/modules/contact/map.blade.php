<div class="border-1 p-a10 bg-light">
<div class="row">
    <div class="col-md-6" style="padding-right: 0;">
        <div id="map" style="height: 300px;"></div>
    </div>
    <div class="col-md-6" style="padding-left: 0;">
        <div id="street-view" style="height: 300px;"></div>
    </div>
</div>
</div>
@push('js-inline')
    <script>
        function initMap() {
            var coordinate = {lat: {{ setting('contact::contact-map-lat') }}, lng: {{ setting('contact::contact-map-lng') }} };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: coordinate
            });
            var marker = new google.maps.Marker({
                position: coordinate,
                map: map,
                icon: "{{ Theme::url('images/favicon.png') }}"
            });
            var panorama = new google.maps.StreetViewPanorama(
                document.getElementById('street-view'),
                {
                    position: coordinate,
                    pov: { heading: 260, pitch: 10},
                    zoom: 0
                }
            )
            map.setStreetView(panorama);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ setting('contact::contact-map-key') }}&callback=initMap"></script>
@endpush