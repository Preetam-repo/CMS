$(document).ready(function() {
    if (page != "websiteUsers") { return false; }
    $.ajax({
            url: base_url+'api/aoWebsiteManagement/getUsers',
            type: 'POST',
            data: { aoId: aoId},
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Name'] = "";
            bodyOrder['Email'] = "email";
            bodyOrder['Mobile'] = "mobile";
            bodyOrder['Password'] = "password";
            bodyOrder['Action'] = "action";
            var html = "";
                var index = 0;
                $.each(bodyOrder, function(key, val) {
                    order[index] = key;
                    $("#thead").append("<th>" + key + "</th>");
                    index++;
                });
            $.each(data['user'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index]=="Action") {
                    html += "<td><a href='userMenuRole?id=" + val["id"] + "' >Role</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    }else if (order[index]=="Name") {
                    html += "<td>" + val["firstName"]+" "+val["lastName"] + "</td>";
                    }else{
                    html += "<td>" + val[bodyOrder[order[index]]] + "</td>";
                    }
                });
                html += "</tr>";
            });
            $("#tbody").html(html);
            $('#table').bootstrapTable(bootstrapTableOptions);
        });
});
$(document).ready(function() {
    if (page != "websiteManagement") { return false; }
    $.ajax({
            url: base_url + 'api/aoWebsiteManagement/get_website_info',
            type: 'POST',
            data:{aoId:aoId},
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
                if ((keyId != "preloader") &&(keyId != "social_links") && (keyId != "id") &&(keyId != "aoId") && (keyId != "created_ip") && (keyId != "created_time") && (keyId != "last_updated_ip") && (keyId != "last_updated_time")) {
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
    formdata.set("aoId",aoId);
    $.ajax({
            url: base_url + 'api/aoWebsiteManagement/save_info_preloader',
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
    formdata.set("aoId",aoId);
    $.ajax({
            url: base_url + 'api/aoWebsiteManagement/style_master',
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