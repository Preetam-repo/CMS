$(document).ready(function() {
    if (page != "websiteSlider") { return false; }
    $.ajax({
            url: base_url + 'api/aoWebsiteManagement/getWebsiteSilder',
            type: 'POST',
            data: { aoId: aoId },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Name'] = "name";
			bodyOrder['Link Name'] = "linkName";
			bodyOrder['SRN'] = "srn";
			bodyOrder['Title'] = "title";
			bodyOrder['Tag Line'] = "tagLine";
			bodyOrder['Button Name'] = "buttonName";
			bodyOrder['Image Upload'] = "imageUpload";
            bodyOrder['Location'] = "location";
			bodyOrder['Action'] = "action";
            var html = "";
            if ((!_.isNull(data['order'])) && (!_.isEmpty(data['order']['columnId']))) {
                $.each(data['order']['columnId'].slice(1, -1).split(','), function(key, val) {
                    order[key] = val;
                    $("#thead").append("<th data-field='" + val + "'>" + val + "</th>");
                });
            } else {
                var index = 0;
                $.each(bodyOrder, function(key, val) {
                    order[index] = key;
                    $("#thead").append("<th>" + key + "</th>");
                    index++;
                });
            }
            $.each(data['websiteSilder'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    } else {
                        html += "<td>" + val[bodyOrder[order[index]]] + "</td>";
                    }
            });
                });
            $("#tbody").html(html);
            $('#table').bootstrapTable(bootstrapTableOptions);
            if ((!_.isNull(data['order'])) && (!_.isEmpty(data['order']['visible'])) && (data['order']['visible'] != "[]")) {
                $.each(data['order']['visible'].slice(1, -1).split(','), function(key, val) {
                    $('#table').bootstrapTable('hideColumn', order[key]);

                });
            }
            $(document).on('click', '.deleteRow', function() {
                var id = $(this).attr('value');
                $.ajax({
                        url: base_url + 'api/aoWebsiteManagement/deleteSlider',
                        type: 'POST',
                        data: {id: id },
                    })
                    .done(function(data) {
                        if (JSON.parse(data) == true) {
                           location.reload();
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: "Data was not deleted"
                            })
                        }
                    });
                });
            });
        });
$(document).ready(function() {
    if (page != "addWebsiteSlider") { return false; }
$("#addWebsiteSlider").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        formdata.set("aoId",aoId);
        $.ajax({
                url: base_url + 'api/aoWebsiteManagement/saveWebsiteSilder',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "websiteSlider" });
                    setTimeout(function() { window.location.href = "websiteSlider" }, 1000);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: _.startCase(data) + " is missing"
                    })
                }
            });
    });
});