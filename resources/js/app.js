require('./bootstrap');

document.addEventListener('DOMContentLoaded', function () {

    var map = L.map('mapa').setView([19.601022, -99.047949], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([19.601022, -99.047949]).addTo(map)
      .bindPopup('Visitanos en nuestras oficinas.<br> Revolución 10101.')
      .openPopup();
});