
    function show() {
        let x = document.getElementById("custome-drpdown");
        if (x.style.display === "grid") {
            x.style.display = "none";
        } else {
            x.style.display = "grid";
        }
    }

    let bar = document.querySelector('.filterbar-container');

    window.addEventListener('scroll', function() {

        let viewportOffset = bar.getBoundingClientRect();
        let top = viewportOffset.top;

        let sidebar = document.querySelector('.sidebar-logo');
        let sidebarLogo = document.querySelector('.sidebar-logo-img');

        if (top === 0 && window.innerWidth > 1024) {
            sidebar.style.backgroundColor = 'white';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}';
        } else {
            sidebar.style.backgroundColor = 'black';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/Logo_White.svg')}}';
        }
    })

    window.addEventListener('resize', function() {

        let viewportOffset = bar.getBoundingClientRect();
        let top = viewportOffset.top;

        let sidebar = document.querySelector('.sidebar-logo');
        let sidebarLogo = document.querySelector('.sidebar-logo-img');

        if (top === 0 && window.innerWidth > 1024) {
            sidebar.style.backgroundColor = 'white';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}';
        } else {
            sidebar.style.backgroundColor = 'black';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/Logo_White.svg')}}';
        }
    })


    // start the map
    function initMap() {
        // Map options
        let options = {
            zoom: 10,
            center: {
                lat: 49.779705,
                lng: 6.091878
            },
        }

        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        // Array of markers
        var markers = [
            <?php
            foreach ($trucks as $truck) { ?> {
                coords: {
                    lat: <?php echo $truck['latitude'] ?>,
                    lng: <?php echo $truck['longitude'] ?>
                },
                iconImage: 'https://img.icons8.com/officel/40/000000/marker.png',
                content: '<img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/'. $truck['image'])}}" alt="" /><h1>"<?php echo $truck['name'] ?>"</h1>',
                animation: google.maps.Animation.DROP
            },
            <?php
            }
            ?>

        ];
        // Loop through markers
        for (let i = 0; i < markers.length; i++) {
            // Add marker
            addMarker(markers[i]);
        }
        // Add Marker Function
        function addMarker(props) {
            let marker = new google.maps.Marker({
                position: props.coords,
                map: map,
                animation: google.maps.Animation.DROP,
                //icon:props.iconImage
            });
            // Check for customicon
            if (props.iconImage) {
                // Set icon image
                marker.setIcon(props.iconImage);
            }
            // Check content
            if (props.content) {
                let infoWindow = new google.maps.InfoWindow({
                    content: props.content
                });
                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
            }
        }
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
        });
    }

    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status === 'OK') {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }


    // Favorite ----------------------------------------------------------------
    let favoriteList = document.querySelectorAll(".heartlogo");
    for (let btnFavorite of favoriteList) {
        btnFavorite.addEventListener("click", (e) => {
            const paramFavorite = {
                _token: document.querySelector('input[name="_token"]').value
            };
            const urlFavorite = "/foodtruck/favorite/" + e.target.parentElement.querySelector('input[name="idTruck"]').value;
            fetch(urlFavorite, {
                    method: "POST",
                    body: JSON.stringify(paramFavorite),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => {
                    response.json().then(function(data) {
                        if (data.favorite) {
                            e.target.src = e.target.src.replace("icons8-heart-blank.svg", "icons8-heart-outline.svg");
                        } else {
                            e.target.src = e.target.src.replace("icons8-heart-outline.svg", "icons8-heart-blank.svg");
                        }
                    });
                });
        });
    }
