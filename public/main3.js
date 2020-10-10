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