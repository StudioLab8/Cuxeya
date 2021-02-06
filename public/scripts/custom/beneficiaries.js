
$(document).ready( function () {

    if($('#accept-beneficiary').length) {
        $('#accept-beneficiary').on('click', function (e) {
            check('accept');    
        });
    }

    if($('#reject-beneficiary').length) {
        $('#reject-beneficiary').on('click', function (e) {
            check('reject');    
        });
    }

    if($('#contac-beneficiary').length) {
      $('#contac-beneficiary').on('click', function (e) {
        contact();  
      });
    }

    if($('#attending-project').length) {
      $('#attending-project').on('click', function (e) {
        check('attending'); 
      });
    }

});

function check(action) {
    let post_data = {
        beneficiary_id: $('#beneficiary-id').val(),
        action: action
    }

    $.ajax({
        type: 'POST',
        url: '/beneficiary/check',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          if(action === "attending") {
            location.href = "/beneficiary/confirm-attending";
          } else {
            location.href = "/beneficiary/list-pending";
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
}

function contact() {
  let post_data = {
    beneficiary_id: $('#beneficiary-id').val(),
    action: 'contacted',
    message: $('#description').val()
  }

  let validate = validate_form(post_data);
  if(validate.isOk === false) {
      $("#response-validate").html(function() {
            return '<div class="notification error closeable">' +
                   '<p><span>' + validate.errors + '</span></p>' + '</div>';
      });

      return;
  }

  $.ajax({
    type: 'POST',
    url: '/beneficiary/contact',
    data: post_data,
    beforeSend: function(xhr) {
      $.LoadingOverlay("show");
    },
    success: function(response) {
      console.log(response);
      location.href = "/beneficiary/confirm-contact";
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
  
}

function validate_form(data) {
  let message = "";

  if(data.message.length === 0) {
    message += "Escribe un <b>mensaje para tu beneficiario</b>.<br/>";
  }

  return { isOk: (message.length === 0 ? true : false), errors : message };
}