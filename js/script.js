window.addEventListener("load", function () {
    weather("Barcelona");
});

function weather(ciudad) {
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + ciudad + '&lang=es&appid=602d49ea7d1adb1c62c473d9e031bb95')
    .then(function (resp) { return resp.json() })
    .then(function (data) { rellenar(data); console.log(data) })
    .catch(function () { console.log("Error") })
}

function rellenar(data) {
    document.getElementById('nombre').innerHTML = data.name
    document.getElementById('temperatura').innerHTML = Math.round(parseFloat(data.main.temp)-273.15) + '&deg'
    document.getElementById('clima').innerHTML = data.weather[0].description
}