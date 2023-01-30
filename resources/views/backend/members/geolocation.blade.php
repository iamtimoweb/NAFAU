@extends('backend.layouts.master')
@section('pageTitle') members @endsection
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('pageContent')
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Members Location</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">members location</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div id="map" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script async
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}">
    </script>
    <script>

        let map, myLatLng;
        $(document).ready(function () {
            // using the geolocation navigator to locate the current position of the user
            (function geolocationInit() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(success, fail);
                } else {
                    Swal.fire(
                        {
                            icon: 'warning',
                            text: 'Browser not supported!'
                        }
                    )
                }
            })()


            function success(position) {
                const lat_val = position.coords.latitude;
                const lng_val = position.coords.longitude;

                myLatLng = new google.maps.LatLng(lat_val, lng_val);

                createMap(myLatLng);
                //nearBySearch(myLatLng, ["school"])
                searchFarmers(lat_val, lng_val)
            }

            function fail() {
                Swal.fire(
                    {
                        icon: 'warning',
                        text: 'Fail to find your current position!'
                    }
                )
            }


            function createMap(myLatLng) {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: myLatLng,
                    zoom: 8,
                });
                const marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                });
            }

            function createMarker(latlng, icon, name) {
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: icon,
                    title: name
                });
            }

            /* function nearBySearch(myLatLng, type) {

                 const request = {
                     location: myLatLng,
                     radius: '2500',
                     types: [type]
                 }
                 service = new google.maps.places.PlacesService(map)
                 service.nearbySearch(request, callback)

                 // callback function
                 function callback(results, status) {
                     if (status == google.maps.places.PlacesServiceStatus.OK) {
                         for (const i = 0; i < results.length; i++) {
                             const place = results[i];
                             latlng = place.geometry.location
                             icon = '<span class="fa fa-school"></span>'
                             name = place.name
                             // create marker
                             createMarker(latlng, icon, name);
                         }
                     }
                 }
             }*/

            // function to search for the farmers around
            function searchFarmers(lat, lng) {
                $.ajax({
                    url: "{{route('api.fetch-farmers')}}",
                    method: "POST",
                    data: {
                        lat: lat,
                        lng: lng
                    },
                    success: function (data) {
                        $.each(data, function (key, value) {
                            const geo_lat = value.lat;
                            const geo_lng = value.lng;
                            const name = value.name;
                        })
                    }
                })
            }
        })
    </script>
@endsection
