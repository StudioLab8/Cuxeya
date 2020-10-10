const register = document.querySelector('#register-button')

register.addEventListener('click', _ => {
  // Send PUT Request here
  let user = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password1").value;

  fetch('/registro', {
    method: 'post',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      user: user,
      email: email,
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
    window.location.href='/registro-confirm';
  })

});