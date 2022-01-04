function onMapClick(e) {
    gib_uni();
    marker = new L.marker(e.latlng, {id:uni, icon:redIcon, draggable:'true'});
    map.addLayer(marker);
};

marker.on('dragend', function(event){
    var marker = event.target;
    var position = marker.getLatLng();
    alert(position);
    marker.setLatLng([position],{id:uni,draggable:'true'}).bindPopup(position).update();
});