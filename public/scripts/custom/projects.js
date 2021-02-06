
var dzfiles = [];
var donations_list = [];

$(document).ready( function () {

    if($('#modality-project').length) {
        $('#row-online-modality').hide();
    }

    if($('#project-type').length) {
        $('#row-type-fundation').hide();
    }

    if($('.WYSIWYG').length) {
        $('.WYSIWYG').richText();
    }
    
    $('#modality-project').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        if(valueSelected == 'face-to-face') {
            $('#row-online-modality').hide();
            $('#row-inperson-modality').show();
        } else if(valueSelected == 'on-line') {
            $('#row-online-modality').show();
            $('#row-inperson-modality').hide();
        }

    });
    
    $('#project-type').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        if(valueSelected == 'independent') {
            $('#row-type-fundation').hide();
            $('#row-type-independent').show();
        } else if(valueSelected == 'foundation') {
            $('#row-type-fundation').show();
            $('#row-type-independent').hide();
        }

    });

    if($('#save-project').length) {
        $('#save-project').on('click', function (e) {
            save_project();    
        });
    }

    if($('#publish-project').length) {
        $('#publish-project').on('click', function (e) {
            publish();    
        });
    }

    if($('#accept-project').length) {
        $('#accept-project').on('click', function (e) {
            check('accept');    
        });
    }

    if($('#reject-project').length) {
        $('#reject-project').on('click', function (e) {
            check('reject');    
        });
    }

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

function save_project() {
    let project_name = $('#project-name').val();
    let project_type = $('#project-type').val();
    let category = $('#category').val();
    let modality_project = $('#modality-project').val();
    let link_zoom = $('#link-zoom').val();
    let country = $('#country').val();
    let city = $('#city').val();
    let address = $('#address').val();
    let state = $('#state').val();
    let zip_code = $('#zip-code').val();
    let galery = get_gallery_list();
    let youtube_link = $('#youtube-link').val();
    let description = $('#description').val();
    let phone = $('#phone').val();
    let web_site = $('#web-site').val();
    let email = $('#email').val();
    let facebook = $('#facebook').val();
    let twitter = $('#twitter').val();
    let instagram = $('#instagram').val();
    let receive_donations = $('#receive-donations').is(":checked") === true ? 1 : 0;
    let donations = get_donations_list();
    let personalized_donation = $('#personalized-donation').val() === "yes" ? 1 : 0;
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
        project_name: project_name,
        project_type: project_type,
        category: category,
        modality_project: modality_project,
        link_zoom: link_zoom,
        country: country,
        city: city,
        address: address,
        state: state,
        zip_code: zip_code,
        galery: galery,
        youtube_link: youtube_link,
        description: description,
        phone: phone,
        web_site: web_site,
        email: email,
        facebook: facebook,
        twitter: twitter,
        instagram: instagram,
        receive_donations: receive_donations,
        donations: donations,
        personalized_donation: personalized_donation,
        documents: documents,
        documentslist: documentslist
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
        url: '/projects/store',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          $.LoadingOverlay("hide");
          if(response.success) {  
            window.location.replace('/confirm-project-user');    
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

    if(data.project_name.length === 0) {
        message += "Proporcione un <b>nombre del proyecto</b>.<br/>";
    }

    if(data.project_type === "none") {
        message += "Seleccione un <b>tipo de proyecto</b>.<br/>";
    }

    if(data.project_type === "independent") {
        if(data.documents.ine_independent === "none") {
            message += "Complete su <b>documentación</b>, proporcione su <b>INE</b>.<br/>";
        }
    }

    if(data.project_type === "foundation") {
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
            message += "Complete su <b>documentación</b>, proporcione su <b>INE</b>.<br/>";
        }
    }

    if(data.category === "none") {
        message += "Seleccione una <b>categoría</b>.<br/>";
    }

    if(data.modality_project === "face-to-face") {
        if(data.country === "none") {
            message += "Seleccione un <b>País</b>.<br/>";
        }

        if(data.city.length === 0) {
            message += "Proporcione una <b>Ciudad</b>.<br/>";
        }

        if(data.address.length === 0) {
            message += "Proporcione una <b>Dirección</b>.<br/>";
        }
        
        if(data.state.length === 0) {
            message += "Proporcione un <b>Estado</b>.<br/>";
        }

        if(data.zip_code.length === 0) {
            message += "Proporcione un <b>Código Postal</b>.<br/>";
        }

    } else if(data.modality_project === "on-line") {
        if(data.link_zoom.length === 0) {
            message += "Proporcione un <b>link de Zoom</b>.<br/>";
        }
    }

    if(data.galery.length < 2) {
        message += "Seleccione al <b>menos 2 imágenes</b>.<br/>";
    }

    if(data.description.length === 0) {
        message += "Proporcione la <b>descripción de tu proyecto</b>.<br/>";
    }

    if(data.receive_donations) {
        if(data.donations.length === 0) {
            message += "Establezca al menos un <b>concepto de donación</b>.<br/>"; 
        }
    }

    return { isOk: (message.length === 0 ? true : false), errors : message };
}

function get_donations_list() {
    donations_list = [];

    $('#pricing-list-container tr').each(function () {
        let donation = new Object();
        donation.concept = $(this).find("td").eq(0).find("input").eq(0).val();
        donation.description = $(this).find("td").eq(0).find("input").eq(1).val();
        donation.amount = $(this).find("td").eq(0).find("input").eq(2).val();

        if(typeof donation.concept != 'undefined') {
            if(donation.concept.length > 0 && 
            donation.description.length  > 0 &&
            donation.amount.length > 0) {
                donations_list.push(donation);
            }
        }
        
    });

    return donations_list;
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

function publish() {

    let post_data = {
        project_id: $('#project-id').val()
    }

    $.ajax({
        type: 'POST',
        url: '/projects/publish',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          location.href = "/projects/list-accepted";
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

function check(action) {
    let post_data = {
        project_id: $('#project-id').val(),
        action: action
    }

    $.ajax({
        type: 'POST',
        url: '/projects/check',
        data: post_data,
        beforeSend: function(xhr) {
          $.LoadingOverlay("show");
        },
        success: function(response) {
          console.log(response);
          location.href = "/projects/list-pending";
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