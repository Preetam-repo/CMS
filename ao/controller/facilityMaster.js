$(document).ready(function() {
    if (page != "facilityMaster") { return false; }
    $.ajax({
            url: '../api/facility/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['SRN'] = "srn";
            bodyOrder['Facility Name'] = "facility_name";
            bodyOrder['Facility Folder'] = "facility_folder";
            bodyOrder['Primary Page'] = "primary_page_name";
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
            $.each(data['facility'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index]=="Action") {
                    html += "<td><a href='editFacility?id=" + val["id"] + "'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteFacility' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    }else{
                    html += "<td>" + val[bodyOrder[order[index]]] + "</td>";
                    }
                });
                html += "</tr>";
            });
            $("#tbody").html(html);
            $('#table').bootstrapTable(bootstrapTableOptions);
            if ((!_.isNull(data['order'])) && (!_.isEmpty(data['order']['visible'])) && (data['order']['visible'] != "[]")) {
                $.each(data['order']['visible'].slice(1, -1).split(','), function(key, val) {
                    $('#table').bootstrapTable('hideColumn', order[key])
                });
            }
        });
        $(document).on('click','.deleteFacility',function() {
            var id = $(this).attr('value');
            $.ajax({
                url: '../api/facility/delete',
                type: 'POST',
                data: {id:id},
            })
            .done(function(data) {
                if (data == "true") {
                    window.location.href="facilityMaster";
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
$(document).ready(function() {
    if (page != "addFacility") { return false; }
    $("#addFacility").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/facility/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "facilityMaster" });
                    setTimeout(function() { window.location.href = "facilityMaster" }, 1000);
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
$(document).ready(function() {
    if (page != "editFacility") { return false; }
    $.ajax({
            url: '../api/facility/edit',
            type: 'POST',
            data: { id: $.urlParam("id") },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var html = "";
            $.each(data["facility"], function(key, val) {
                if ((key != "editable") && (key != "status")) {
                    $("#" + key).val(val).trigger('change');
                } else {
                    if (val == "1") { $("#" + key + "1").attr('checked', 'checked'); } else if (val == "0") { $("#" + key).attr('checked', 'checked'); }
                }
            });
        });
    $("#addFacility").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/facility/update',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "facilityMaster" });
                    setTimeout(function() { window.location.href = "facilityMaster" }, 1000);
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