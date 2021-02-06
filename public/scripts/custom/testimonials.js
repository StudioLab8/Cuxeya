var dzfiles = [];

$(document).ready( function () {

    if($('#save-testimony').length) {
        $('#save-testimony').on('click', function (e) {
            save();    
        });
    }

    if($('#edit-testimony').length) {
        $('#edit-testimony').on('click', function (e) {
            edit();    
        });
    }

} );

function save() {
    let name = $('#name').val();
    let organization = $('#organization').val();
    let publish = $('#publish').val() === "yes" ? 1 : 0;
    let image = get_gallery_list();
    let testimony = $('#testimony').val();

    if(dzfiles.length === 0) {
        add_file_element("avatarg.png");
    }

    let post_data = {
        name: name,
        organization: organization,
        publish: publish,
        image: image,
        testimony: testimony
    };

    let validate = validate_form_project(post_data);
    if(validate.isOk === false) {
        $("#response-validate").html(function() {
            return '<div class="notification error closeable">' +
                   '<p><span>' + validate.errors + '</span></p>' + '</div>';
        });

        return;
    }

    $.ajax({
        type: 'POST',
        url: '/testimonials/store',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/testimonials/index');    
          } else {
            $("#response-validate").html(function() {
                return '<div class="notification error closeable">' +
                        '<p><span>Error interno inténtelo de nuevo por favor.</span></p>' + 
                       '</div>';
            });
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

function edit() {
    let id = $('#testimony-id').val();
    let name = $('#name').val();
    let organization = $('#organization').val();
    let publish = $('#publish').val() === "yes" ? 1 : 0;
    let image = get_gallery_list();
    let testimony = $('#testimony').val();
    let image_old = $('#testimony-img').val();

    if(dzfiles.length === 0) {
        if(image_old != "avatarg.png") {
            add_file_element(image_old);
        } else {
            add_file_element("avatarg.png");
        }
    }

    let post_data = {
        id: id,
        name: name,
        organization: organization,
        publish: publish,
        image: image,
        testimony: testimony
    };

    let validate = validate_form_project(post_data);
    if(validate.isOk === false) {
        $("#response-validate").html(function() {
            return '<div class="notification error closeable">' +
                   '<p><span>' + validate.errors + '</span></p>' + '</div>';
        });

        return;
    }

    $.ajax({
        type: 'POST',
        url: '/testimonials/update',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/testimonials/index');    
          } else {
            $("#response-validate").html(function() {
                return '<div class="notification error closeable">' +
                        '<p><span>Error interno inténtelo de nuevo por favor.</span></p>' + 
                       '</div>';
            });
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

function validate_form_project(data) {
    let message = "";

    if(data.name.length === 0) {
        message += "Proporcione un <b>nombre</b>.<br/>";
    }

    if(data.organization.length === 0) {
        message += "Proporcione un <b>nombre de la organización</b>.<br/>";
    }

    if(data.testimony.length === 0) {
        message += "Proporcione el <b>testimonio</b>.<br/>";
    }

    return { isOk: (message.length === 0 ? true : false), errors : message };
}

function get_gallery_list() {
    return dzfiles;
}

function add_file_element(file_name) {
    dzfiles.push(file_name);
}

function remove_file_element(file_name) {
    dzfiles.splice( $.inArray(file_name, dzfiles), 1 );
}
