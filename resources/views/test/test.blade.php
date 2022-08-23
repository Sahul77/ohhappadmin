@extends('admin.layout.main')
@section('main_content')
    <style>
        #map {
            width: 100%;
            height: 600px;
            background: #000;
        }

        .glyphicon-chevron-left::before {
            content: "\e079";
            display: none;
        }

        .glyphicon-chevron-right::before {
            content: "\e079";
            display: none;
        }

        .fade {
            opacity: initial;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

        .travel-overview {
            margin: 0 auto;
            padding: 0;
            list-style: none;
            background: #dddddd;
            border-radius: 5px 5px 0 0;
        }

        .tabaccor_content {
            padding: 15px 15px;
            display: none;
            border-radius: 0 0 5px 5px;
        }

        .travel {
            line-height: 1.2;
        }

        .romantic-hotel {
            /*border-right: solid 1px #dfdfdf !important;*/
            text-align: center;
        }

        .romantic-meal {
            /*border-right: solid 1px #dfdfdf !important;*/
            text-align: center;
        }

        .romantic-slants {
            /*border-right: solid 1px #dfdfdf !important;*/
            text-align: center;
        }

        .romantic-private {
            /*border-right: solid 1px #dfdfdf !important;*/
            text-align: center;
        }

        .romantic-honeymoon p {
            padding-right: 11px;
            color: black;
            font-size: 10px;
        }

        .textblack13light {
            font-weight: 300;
            font-size: 13px;
            color: #3b3e3b;
            line-height: 20px;
        }

        .textgreen14bold {
            font-weight: 700;
            font-size: 14px;
            color: #60b739;
            line-height: 20px;
        }

        .hidedesk1 {
            color: #04aae1 !important;
            text-decoration: underline !important;
        }

        .textblue13 {
            font-size: 13px;
            color: #04aae1;
            line-height: 18px;
        }

        .hidedesk1 {
            display: none;
        }

        .overviewconbox {
            margin-bottom: 20px;
        }

        .textgreen15boldhead {
            font-weight: 700;
            color: #60b739;
            font-size: 15px;
            line-height: 18px;
            text-transform: uppercase;
            padding-bottom: 5px;
        }

        .textgreen15boldhead h3 {
            font-weight: 700;
            color: #60b739;
            font-size: 15px;
            line-height: 18px;
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 0;
        }

        .textblack13light {
            font-weight: 300;
            font-size: 13px;
            color: #3b3e3b;
            line-height: 20px;
        }

        .textblack13light ul li {
            list-style-type: disc;
            margin: 0;
            padding: 3px 0;
            line-height: 16px;
        }

        .textblack13light ul {
            margin: 0 0 0 16px;
            padding: 0;
        }

        .textblack13light ul li span {
            margin: 0;
            padding: 0;
        }

        .itianery {
            list-style: none;
            padding: 16px;
            background: rgba(41, 73, 154, .05);
            border-radius: 5px;
            margin-bottom: 33px;
        }

        .f_table {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
            text-align: left;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 18px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }

        .topmargin20px {
            margin-top: 20px !important;
        }

        .textblack13light {
            font-weight: 300;
            font-size: 13px;
            color: #3b3e3b;
            line-height: 20px;
        }

        .textblack13light ul {
            margin: 0 0 0 16px;
            padding: 0;
        }

        .textblack13light ul li {
            list-style-type: disc;
            margin: 0;
            overflow: hidden;
            padding: 3px 0;
            line-height: 16px;
        }

        .textblack13light ul li span {
            margin: 0;
            padding: 0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #60b739;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: black;
            font-size: 17px;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .packagedethotelarea {
            border-bottom: solid 1px #d9e3e2;
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 25px;
        }

        .padding5pxarea {
            padding: 0 10px;
        }

        .padding5px {
            padding: 0 5px;
        }

        .packagedethotelimg {
            margin-bottom: 0;
        }

        .zoomicon {
            position: absolute;
            right: 5px;
            bottom: 0;
        }

        .zoomicon img {
            width: 22px !important;
            height: 21px !important;
        }

        .packagedethotelimg img {
            width: 100%;
            height: 90px;
        }

        #st-2 {
            font-family: "Helvetica Neue", Verdana, Helvetica, Arial, sans-serif;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            backface-visibility: hidden;
            display: block;
            position: fixed;
            opacity: 1;
            text-align: left;
            bottom: 0px !important;
            z-index: 94034;
        }

        #more {
            display: none;
        }

        #myBtn {
            cursor: pointer
        }

        .indent_title_in i {
            font-size: 31px;
            position: absolute;
            left: 0;
            color: #999;
            top: 0;
            margin-left: 35px;
        }

        .customize-trip h4 {
            color: #014C78;
            ;
            font-family: "Racing Sans One", Sans-serif;
            font-size: 19px;
            font-weight: 700;
            text-transform: capitalize;
            letter-spacing: 1px;
            /*margin-bottom:2rem!important;*/
        }

        .customize-trip {
            margin-top: 18rem !important;
        }

        .elementor-blockquote {
            border-left-width: 12px;
            padding-left: 22px;
            border-color: #E63946;
        }

        .carosel img {
            height: 100% !important;
        }
    </style>
    <script type='text/javascript'
        src='//platform-api.sharethis.com/js/sharethis.js#property=5c6801995cdd5d0011b909d2&product=social-ab'
        async='async'></script>
    <!-- End SubHeader ============================================ -->
    <div class="clearfix">
        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 blog_wrap">
                    <div class="clearfix">
                        <hr>
                        <div id="map"></div>
                        <!-- end post -->
                    </div>
                </div>
                <aside class="col-lg-3 col-md-3 col-xs-12" id="sidebar">
                    <div class="customize-trip ">
                        <blockquote class="elementor-blockquote">
                            <h4>Customize Your Trip</h4>
                        </blockquote>
                        <form id="loginform" class="form-horizontal" role="form">
                            <div style="margin-bottom: 9px;" class="input-group  input-group-lg ">
                                <input id="login-username" type="text" class="form-control" name="username"
                                    value="" placeholder="Your Name"
                                    style="background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group input-group-lg">
                                <input id="login-password" type="password" class="form-control" name="password"
                                    placeholder="Your Email "
                                    style=" background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group input-group-lg">
                                <input id="login-password" type="password" class="form-control" name="password"
                                    placeholder="Phone Number"
                                    style=" background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group input-group-lg">
                                <input id="login-password" type="password" class="form-control" name="password"
                                    placeholder="Choose Travel Date"
                                    style="  background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group input-group-lg">
                                <select class="form-select" aria-label="Default select example"
                                    style="  background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group input-group-lg">
                                <input id="login-password" type="number" class="form-control" name="password"
                                    placeholder="Choose Travel Date"
                                    style="  background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px;">
                            </div>
                            <div style="margin-bottom: 9px;" class="input-group">
                                <textarea class="form-control" placeholder="Message" id="floatingTextarea2"
                                    style=" background-color: #F2F2F2;
                        border-color: #B2B2B2;
                        border-width: 0px 0px 1px 0px;
                        border-radius: 10px 10px 10px 10px; height: 80px""></textarea>
                            </div>
                            <button type="button" class="btn btn-danger w-100 mt-2">Enquiry Now</button>
                        </form>
                    </div>
                </aside>
                <!-- End aside -->
            </div>
        </div>
    </div>
    <script>
        $("#data_query").click(function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ url('submit_query') }}",
                dataType: "json",

                data: $('#query').serialize(),

                success: function(data) {

                    document.getElementById("query").reset();
                    $('.addPackage_message').removeClass('hidden');
                },
                error: function(data) {
                    document.getElementById("add_post").reset();
                    alert("Error")

                }
            });
        });
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoWTRdAzyivdyuYMe2n0vUVzV3MGmHLcA&signed_in=false&callback=initMap">
    </script>
    <script>
        //    function initMap() {
        //    	var locations = [
        //    		['Bondi Beach', -33.890542, 151.274856, 5],
        //    		['Coogee Beach', -33.923036, 151.259052, 4],
        //    		['Cronulla Beach', -34.028249, 151.157507, 3],
        //    		['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
        //    		['Maroubra Beach', -33.950198, 151.259302, 1]
        //    	];
        //    	var myLatLng = new google.maps.LatLng(-33.92, 151.25);

        //    	var map = new google.maps.Map(document.getElementById('map'), {
        //    		zoom: 11,
        //    		center: myLatLng,
        //    		mapTypeId: google.maps.MapTypeId.ROADMAP,
        //    		mapTypeControl:false,
        //    		scrollwheel: false,
        //    		navigationControl: false,
        //    		mapTypeControl: false,
        //    		scaleControl: false,
        //    		streetViewControl: false,
        //    		zoomControl:true,
        //    		zoomControlOptions: {
        //    		  style:google.maps.ZoomControlStyle.SMALL,
        //    		  position:google.maps.ControlPosition.TOP_LEFT
        //    		}
        //    	});

        //    	var infowindow = new google.maps.InfoWindow();
        //    	var marker, i;
        //    	var coords = [];
        //    	var image = '{{ url('site_assets/img/slides/icons_29.png') }}';

        //    	for (i = 0; i < locations.length; i++) {  
        //    		marker = new google.maps.Marker({
        //    			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        //    			icon: image,
        //    			map: map
        //    		});
        //    		coords.push(new google.maps.LatLng(locations[i][1], locations[i][2]));
        //    		google.maps.event.addListener(marker, 'click', (function(marker, i) {
        //    			return function() {
        //    			  infowindow.setContent(locations[i][0]);
        //    			  infowindow.open(map, marker);
        //    			}
        //    		})(marker, i));

        //    		marker.setMap(map);
        //    	}
        //    	var line = new google.maps.Polyline({
        //    		path: coords,
        //    		strokeColor: "#FF0000",
        //    		strokeOpacity: 1.0,
        //    		strokeWeight: 5,
        //    		map: map
        //    	});
        //    }

        function initMap() {
            var geocoder = new google.maps.Geocoder();
            var address = "Goa";

            geocoder.geocode({
                'address': address
            }, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);


                        function showPosition(position) {
                            var pointA = new google.maps.LatLng(position.coords.latitude, position.coords
                                .longitude),
                                pointB = new google.maps.LatLng(latitude, longitude),
                                myOptions = {
                                    zoom: 5,
                                    center: pointA
                                },
                                map = new google.maps.Map(document.getElementById('map'), myOptions),
                                // Instantiate a directions service.
                                directionsService = new google.maps.DirectionsService,
                                directionsDisplay = new google.maps.DirectionsRenderer({
                                    map: map
                                }),
                                markerA = new google.maps.Marker({
                                    position: pointA,
                                    title: "point A",
                                    label: "A",
                                    map: map
                                }),
                                markerB = new google.maps.Marker({
                                    position: pointB,
                                    title: "point B",
                                    label: "B",
                                    map: map
                                });
                            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
                        }
                    } else {
                        x.innerHTML = "Geolocation is not supported by this browser.";
                    }
                }
            });
        }



        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
                origin: pointA,
                destination: pointB,
                travelMode: google.maps.TravelMode.DRIVING
            }, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        initMap();
    </script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
@endsection
