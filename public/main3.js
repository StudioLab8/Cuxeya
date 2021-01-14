const register = document.querySelector('#register-button')

register.addEventListener('click', _ => {
  // Send PUT Request here
  let password = document.getElementById("password1").value;

  fetch('/set-password', {
    method: 'post',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      password: password
    })
  })
  .then(res => {
    if (res.ok) { 
      return res.json()
    }
  })
  .then(response => {
    console.log(response)
    //window.location.reload(true)
    if(response.message == "OK"){
      window.location.href='/recovery-confirm';
    }
    
  })

});

	var map = L.map('mapa').setView([19.601022, -99.047949], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([19.601022, -99.047949]).addTo(map)
  .bindPopup('Visitanos en nuestras oficinas.<br> Revolución 10101.')
  .openPopup();
