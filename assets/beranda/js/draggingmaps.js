map.dragging.enable();
data.forEach(function(d)
        {
    lat=d.lat;
    lon=d.lon;
    road=d.road;
    detector=d.detector;
    markers.push((new L.circle([lat, lon], 200, {
        color: 'yellow',
        fillColor: '#f0f',
        fillOpacity: 0.5
    })).bindPopup("Road Name:"+road+"<br>Detector ID: "+detector))

        });
for (var i = 0; i < markers.length; i++) {
    map.addLayer(markers[i]);
}
map.setView([lat, lon],13);
map.dragging.enable();