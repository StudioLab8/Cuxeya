
$(document).ready( function () {
    
    $('#row-type-fundation').hide();

    $('#is-fundation').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        if(valueSelected == 'no') {
            $('#row-type-fundation').hide();
            $('#row-type-independent').show();
        } else if(valueSelected == 'yes') {
            $('#row-type-fundation').show();
            $('#row-type-independent').hide();
        }
    });
    
    $( "#button-form" ).click(function() {
        save();    
    });

    // documents update
    if($('#ac_doc').length) {
        $('#ac_doc').on('change', function (e) {
            document_upload("ac_doc");
        });
    }

    if($('#csf_doc').length) {
        $('#csf_doc').on('change', function (e) {
            document_upload("csf_doc");
        });
    }

    if($('#cd_doc').length) {
        $('#cd_doc').on('change', function (e) {
            document_upload("cd_doc");
        });
    }

    if($('#ine_doc').length) {
        $('#ine_doc').on('change', function (e) {
            document_upload("ine_doc");
        });
    }

    if($('#ine_doc2').length) {
        $('#ine_doc2').on('change', function (e) {
            document_upload("ine_doc2");
        });
    }

} );

function save() {
    let project_id = $('#project-id').val();
    let phone = $('#phone').val();
    let is_fundation = $('#is-fundation').val() === "yes" ? "foundation" : "person";
    let documents = {
        ine_independent: $('#data_ine_doc2').val(),
        ac_doc: $('#data_ac_doc').val(),
        csf_doc: $('#data_csf_doc').val(),
        cd_doc: $('#data_cd_doc').val(),
        ine_doc: $('#data_ine_doc').val()
    };
    let documentslist = [
        { type: 'Identificación oficial', file: $('#data_ine_doc2').val() },
        { type: 'Acta constitutiva', file: $('#data_ac_doc').val() },
        { type: 'Constancia de situación fiscal', file: $('#data_csf_doc').val() },
        { type: 'Comprobante de domicilio', file: $('#data_cd_doc').val() },
        { type: 'Identificación oficial', file: $('#data_ine_doc').val() },
    ];

    let post_data = {
        project_id: project_id,
        phone: phone,
        type: is_fundation,
        documents: documents,
        documentslist: documentslist
    };

    let validate = validate_form_project(post_data);
    if(validate.isOk === false) {
        $("#response-validate").html(function() {
            return '<div class="notification error closeable">' +
                   '<p><span>' + validate.errors + '</span></p>' +
                   '<a class="close" href="#"></a>' +
                   '</div>';
        });

        return;
    }

    if(is_fundation === "foundation") {
        save_beneficiary(post_data);
    } else {
        pay(50, post_data);
    }
}

function save_beneficiary(post_data) {
    $.ajax({
        type: 'POST',
        url: '/beneficiary/store',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/registro-exitoso');    
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

    if(data.type === "person") {
        if(data.documents.ine_independent === "none") {
            message += "Complete su <b>documentación</b>, proporcione su <b>Identificación oficial</b>.<br/>";
        }
    }

    if(data.type === "foundation") {
        if(data.documents.ac_doc === "none") {
            message += "Complete su <b>documentación</b>, porporcione su <b>Acta constitutiva</b>.<br/>";
        }

        if(data.documents.csf_doc === "none") {
            message += "Complete su <b>documentación</b>, porporcione su <b>Constancia de situación fiscal</b>.<br/>";
        }

        if(data.documents.cd_doc === "none") {
            message += "Complete su <b>documentación</b>, porporcione su <b>Comprobante de domicilio</b>.<br/>";
        }

        if(data.documents.ine_doc === "none") {
            message += "Complete su <b>documentación</b>, proporcione su <b>Identificación oficial</b>.<br/>";
        }
    }

    return { isOk: (message.length === 0 ? true : false), errors : message };
}

function document_upload(id_doc) {
    var file_data = $("#" + id_doc).prop("files")[0];
    var form_data = new FormData();                  
    form_data.append('file', file_data);  
    $.ajax({
        url: '/upload/docs/store',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'POST',
        beforeSend: function(xhr) {
            $.LoadingOverlay("show");
        },
        success: function(response) {
            $.LoadingOverlay("hide");
            $("#column_" + id_doc).html(function() {
                return '<a href="/images/uploads/docs/' + response.filename + '" target="_blank">' + response.filename + '</a>' +
                        '<input type="hidden" id="data_' + id_doc + '" value="' + response.filename + '" />';
            });
        }
     });
}