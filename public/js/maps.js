function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat:-34.603722,lng:-58.381592}
  });
  infowindow = new google.maps.InfoWindow({
                content: "loading..."
            });
  setMarkers(map);
}

var markers = [];


function setMarkers(map) {
  // Adds markers to the map.

  for (var i = 0; i < consultorios.length; i++) {
    var consultorio = consultorios[i];
    var marker = new google.maps.Marker({
      position: {lat: consultorio[1], lng: consultorio[2]},
      map: map,
      title: consultorio[0],
      zIndex: i,
      html: '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">'+consultorio[0]+'</h1>'+
        '<div id="bodyContent">'+
        '<p>'+consultorio[3]+'</p>'+
        '</div>'+
        '</div>'
    });
    
    marker.addListener('click', function() {
      infowindow.setContent(this.html);
      infowindow.open(map, this);
    });

    markers.push(marker);
  }
  AutoCenter(map);
}
function AutoCenter(map) {
  //  Create a new viewpoint bound
  if(markers.length){
    var bounds = new google.maps.LatLngBounds();
    //  Go through each...
    $.each(markers, function (index, marker) {
    bounds.extend(marker.position);
    });
    //  Fit these bounds to the map
    map.fitBounds(bounds);
  }
}

