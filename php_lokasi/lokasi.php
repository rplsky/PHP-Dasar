<!DOCTYPE html>
<html>
<body onload="getLocation()">
<h1>HTML Geolocation</h1>
<p>Click the button to get your coordinates.</p>



<p id="demo"></p>

<input type="text" name="latitude" id="latitude">
<input type="text" name="longitude" id="longitude">

<input type="text" name="jarak" id="jarak">

<script>
const x = document.getElementById("demo");
var x1 = document.getElementById("latitude");
var y1 = document.getElementById("longitude");
var jarak = document.getElementById("jarak");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    var lx1, ly1, jrk;
    //Lokasi SMK Sangkuriang
    var x2 = -6.86471623909086;
    var y2 = 107.53988197206728;

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    x1.value = position.coords.latitude;
    y1.value = position.coords.longitude;

    lx1 = position.coords.latitude;
    ly1 = position.coords.longitude;

    jrk = getDistanceBetween2(lx1, ly1, x2, y2);

    jarak.value = round(jrk, 3);

}

function round(num, decimalPlaces = 0) {
    if (num < 0)
        return -round(-num, decimalPlaces);
    var p = Math.pow(10, decimalPlaces);
    var n = num * p;
    var f = n - Math.floor(n);
    var e = Number.EPSILON * n;

    // Determine whether this fraction is a midpoint value.
    return (f >= .5 - e) ? Math.ceil(n) / p : Math.floor(n) / p;
}

function getDistanceBetween(lat1, lon1, lat2, lon2) {
    const R = 6371e3;
    const p1 = lat1 * Math.PI/180;
    const p2 = lat2 * Math.PI/180;
    const deltaLon = lon2 - lon1;
    const deltaLambda = (deltaLon * Math.PI) / 180;
    const d = Math.acos(
        Math.sin(p1) * Math.sin(p2) + Math.cos(p1) * Math.cos(p2) * Math.cos(deltaLambda),
    ) * R;
    return d;
}

function getDistanceBetween2(lat1, lon1, lat2, lon2) {
  const R = 6371e3;
  const p1 = lat1 * Math.PI/180;
  const p2 = lat2 * Math.PI/180;
  const deltaP = p2 - p1;
  const deltaLon = lon2 - lon1;
  const deltaLambda = (deltaLon * Math.PI) / 180;
  const a = Math.sin(deltaP/2) * Math.sin(deltaP/2) +
            Math.cos(p1) * Math.cos(p2) *
            Math.sin(deltaLambda/2) * Math.sin(deltaLambda/2);
  const d = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)) * R;
  return d;
}
</script>

</body>
</html>