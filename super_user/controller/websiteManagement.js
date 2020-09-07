$(document).ready(function() {
    if (page != "websiteManagement") { return false; }
    $.ajax({
            url: '../api/websiteManagement/get_website_info',
            type: 'POST',
            processData: false,
            contentType: false,
        })
        .done(function(response) {
            var data = JSON.parse(response);
                $.each(data['preloader'], function(index, val) {
                var newState = new Option("Preloader "+parseInt(index+25), val['preloader'], false, false);
                $('#site_infopreloader').append(newState).trigger('change');
                });
            $.each(data, function(key, val) {
                var keyId = key;
                var formId = keyId;
                if ((keyId != "preloader") &&(keyId != "social_links") && (keyId != "id") && (keyId != "created_ip") && (keyId != "created_time") && (keyId != "last_updated_ip") && (keyId != "last_updated_time")) {
                    $.each(JSON.parse(val), function(key, value) {
                        if (key=="status") {
                            $('#' + formId + key).attr("checked", "checked").trigger("change");
                        }else{
                            $('#' + formId + key).val(value).trigger('change');
                        }
                    });
                }else if (keyId == "social_links") {
                   $.each(JSON.parse(val), function(key, value) {
                        if (key=="status") {
                            $.each(value, function(key, val) {
                            if (val==true) {$('#' + formId + 'status' + key).attr("checked", "checked").trigger("change");}
                            });
                        }else if (key=="icon") {
                            $.each(value, function(key, val) {
                            $('#' + formId + 'icon' + key).val(val).trigger('change');
                            });
                        }else{
                            $('#' + formId + key).val(value).trigger('change');
                        }
                    });
                }
            });
        });
});
$("#formPreloader").submit(function(event) {
    event.preventDefault();
    var preloaderFormdata = new FormData($("#formPreloader")[0]);
    $.ajax({
            url: '../api/websiteManagement/save_info_preloader',
            type: 'POST',
            data: preloaderFormdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (data == "true") {
                Swal.fire("Preloader Uploaded", "", "success");
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: "Preloader Failed To Upload"
                })
            }
        });
});
$("#style_master").submit(function(event) {
    event.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
            url: '../api/websiteManagement/style_master',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (data == "true") {
                Swal.fire("Data Saved", "", "success")
                    .then((result) => {});
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: "Data Update Failed"
                })
            }
        });
});