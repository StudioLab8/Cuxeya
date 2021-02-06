var dzfiles = [];

$(document).ready( function () {

    if($('.WYSIWYG').length) {
        $('.WYSIWYG').richText();
    }

    if($('#save-news').length) {
        $('#save-news').on('click', function (e) {
            save();    
        });
    }

    if($('#edit-news').length) {
        $('#edit-news').on('click', function (e) {
            edit();    
        });
    }

} );

function save() {
    let title = $('#title').val();
    let publish = $('#publish').val() === "yes" ? 1 : 0;
    let content = $('#content').val();
    let galery = get_gallery_list();

    let post_data = {
        title: title,
        publish: publish,
        content: content,
        galery: galery
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
        url: '/news/store',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/news/index');    
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
    let id = $('#news-id').val();
    let title = $('#title').val();
    let publish = $('#publish').val() === "yes" ? 1 : 0;
    let content = $('#content').val();
    let galery = get_gallery_list();

    let post_data = {
        id : id,
        title: title,
        publish: publish,
        content: content,
        galery: galery
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
        url: '/news/update',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/news/index');    
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

    if(data.title.length === 0) {
        message += "Proporcione un <b>titulo de la noticia</b>.<br/>";
    }

    if(data.content.length === 0) {
        message += "Proporcione el <b>contenido que quieres compartir</b>.<br/>";
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

function delete_image(id) {
    $.ajax({
        type: 'POST',
        url: '/dropzone/news/destroy/' + id,
        data: {id: id},
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          $.LoadingOverlay("hide");
          if(response.success) {  
                $('#row-' + id).remove();
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
