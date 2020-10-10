const login = document.querySelector('#login-button')
const recovery = document.querySelector('#button-recovery')

login.addEventListener('click', _ => {
    // Send PUT Request here
    let email = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    $.ajax({
      type: 'POST',
      url: '/login',
      data: {password: password, email: email},
      beforeSend: function(xhr) {
        $("#login-button").prop('value', 'Validando...');
        $("#login-button").prop('disabled', true);
      },
      success: function(response) {
        $("#login-button").prop('value', 'Iniciar Sesión');
        $("#login-button").prop('disabled', false);

        if(response.success) {
          //window.location.href=response.success;  
          window.location.reload();        
        } else {
          document.getElementById("response-login").innerHTML = '<div class="notification error closeable">' +
              '<p><span>' + response + '</span></p>' + '</div>';
        }
      },
      statusCode: {
        404: function() {
           alert('web not found');
        }
      },
      error: function(x,xs,xt){
        alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
      }

    });
  
  });

  recovery.addEventListener('click', _ => {
    // Send PUT Request here
    let email = document.getElementById("email-recovery").value;

    $.ajax({
      type: 'POST',
      url: '/recoveryPassword',
      data: {email: email},
      beforeSend: function(xhr) {
        $("#button-recovery").prop('value', 'Validando...');
        $("#button-recovery").prop('disabled', true);
      },
      success: function(response) {
        $("#email-recovery").prop('value', '');
        $("#button-recovery").prop('value', 'Recuperar mi contraseña');
        $("#button-recovery").prop('disabled', false);

        if(response.success) {
          document.getElementById("response-recovery-success").innerHTML = '<div class="notification error closeable">' +
              '<p><span>' + response.success + '</span></p>' + '</div>';       
        } else {
          document.getElementById("response-recovery").innerHTML = '<div class="notification error closeable">' +
              '<p><span>' + response + '</span></p>' + '</div>';
        }
      },
      statusCode: {
        404: function() {
           alert('web not found');
        }
      },
      error: function(x,xs,xt){
        alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
      }

    });

  });