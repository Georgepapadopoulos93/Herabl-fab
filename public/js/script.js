var map;
var geocoder;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 37.7749, lng: -122.4194},
        zoom: 8
        });
        geocoder = new google.maps.Geocoder();
        }

        function search() {
        var address = document.getElementById('address').value;
        var city = document.getElementById('city').value;
        var state = document.getElementById('state').value;
        var zip = document.getElementById('zip').value;
        
        var fullAddress = address + ', ' + city + ', ' + state + ' ' + zip;
        
        geocoder.geocode({'address': fullAddress}, function(results, status) {
            if (status === 'OK') {
            var location = results[0].geometry.location;
            map.setCenter(location);
            var marker = new google.maps.Marker({
                map: map,
                position: location
            });
            } else {
            alert('Geocode was not successful for the following reason: ' + status);
            }
        });
        }       