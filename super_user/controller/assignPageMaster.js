$(document).ready(function() {
    if (page != "assignPageMenu") { return false; }
    $.ajax({
            url: '../api/assignPageMenu/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            const footer = "";
            var order = [];
            var bodyOrder = {};
            bodyOrder['Facility'] = "facility_name";
            bodyOrder['SRN'] = "srn";
            bodyOrder['Facility Folder'] = "facility_folder";
            bodyOrder['Main Menu Category'] = "main_menu";
            bodyOrder['Sub Menu Category'] = "sub_menu";
            bodyOrder['Link Name'] = "link_name";
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
            $.each(data['assignMenu'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index]=="Action") {
                    html += "<td><a href='editAssignPageMenu?id=" + val["id"] + "'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteAssignPageMenu' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    }else{
                    var vale = val[bodyOrder[order[index]]];
                    html += "<td>" + ((_.isNull(vale)) ? "" : vale) + "</td>";
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
        $(document).on('click','.deleteAssignPageMenu',function() {
            var id = $(this).attr('value');
            $.ajax({
                url: '../api/assignPageMenu/delete',
                type: 'POST',
                data: {id:id},
            })
            .done(function(data) {
                if (data == "true") {
                    window.location.href="assignPageMenu";
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
    if (page != "addAssignPageMenu") { return false; }
    var facility_id = [];
    var main_menu_id = [];
    var sub_menu_id = [];
    var link_name = [];
    $.ajax({
            url: 'file',
            type: 'POST',
            data: { key: 'A8FFeJZvJNvyjsjTLzNQbzwSo91qk8m6' },
        })
        .done(function(response) {
            link_name = JSON.parse(response);
            var newState = new Option("Please Select", "", false, true);
            $('#link_name').append(newState).trigger('change');
        });

    $.ajax({
            url: '../api/assignPageMenu/getSaved',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            assign_menu = _.uniqBy(data['assignMenu'], "id");
            facility_id = _.uniqBy(data['facility'], "id");
            main_menu_id = _.uniqBy(data['mainMenu'], "id");
            sub_menu_id = _.uniqBy(data['subMenu'], "id");
            $.each(facility_id, function(index, val) {
                var newState = new Option(val['facility_name'], val['id'], false, false);
                $('#facility_id').append(newState).trigger('change');
            });
            $('#facility_id').on('change', function() {
                if (_.isEmpty($(this).val())) {
                    $('#main_menu_id').empty();
                    var newState = new Option("Please Select", "", false, true);
                    $('#main_menu_id').append(newState).trigger('change');
                    return false;
                }
                $('#main_menu_id').empty();
                var newState = new Option("Please Select", "", false, true);
                $('#main_menu_id').append(newState).trigger('change');
                var select_id = $(this).val();
                $.each(link_name, function(key, val) {
                    var facility_folder = _.find(facility_id, ['id', select_id])["facility_folder"];
                    if (facility_folder == key) {
                        $.each(val, function(index, value) {
                            var newState = new Option(value.split(".")[0], value.split(".")[0], false, false);
                            $('#link_name').append(newState).trigger('change');
                        });
                    }
                });
                $.each(main_menu_id, function(index, val) {
                    var id = _.find(facility_id, ['id', val["facility_id"]])["id"];
                    if (id == select_id) {
                        var newState = new Option(val['main_menu'], val['id'], false, false);
                        $('#main_menu_id').append(newState).trigger('change');
                    }
                });
            });

            $('#main_menu_id').on('change', function() {
                if (_.isEmpty($(this).val())) {
                    $('#sub_menu_id').empty();
                    var newState = new Option("Please Select", "0", false, true);
                    $('#sub_menu_id').append(newState).trigger('change');
                    return false;
                }
                $('#sub_menu_id').empty();
                var newState = new Option("Please Select", "0", false, true);
                $('#sub_menu_id').append(newState).trigger('change');
                var select_id = $(this).val();
                $.each(sub_menu_id, function(index, val) {
                    if (val['main_menu_id'] == select_id) {
                        var newState = new Option(val['sub_menu'], val['id'], false, false);
                        $('#sub_menu_id').append(newState).trigger('change');
                    }
                });
            });
        });
    $("#addAssignPage").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/assignPageMenu/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "assignPageMenu" });
                    setTimeout(function() { window.location.href = "assignPageMenu" }, 1000);
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
    if (page != "editAssignPageMenu") { return false; }
    var facility_id = [];
    var main_menu_id = [];
    var sub_menu_id = [];
    var link_name = [];
    $.ajax({
            url: 'file',
            type: 'POST',
            data: { key: 'A8FFeJZvJNvyjsjTLzNQbzwSo91qk8m6' },
        })
        .done(function(response) {
            link_name = JSON.parse(response);
            var newState = new Option("Please Select", "", false, true);
            $('#link_name').append(newState).trigger('change');
        });

    $.ajax({
            url: '../api/assignPageMenu/getSaved',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            assign_menu = _.uniqBy(data['assignMenu'], "id");
            facility_id = _.uniqBy(data['facility'], "id");
            main_menu_id = _.uniqBy(data['mainMenu'], "id");
            sub_menu_id = _.uniqBy(data['subMenu'], "id");
            $.each(facility_id, function(index, val) {
                var newState = new Option(val['facility_name'], val['id'], false, false);
                $('#facility_id').append(newState).trigger('change');
            });
            $('#facility_id').on('change', function() {
                if (_.isEmpty($(this).val())) {
                    $('#main_menu_id').empty();
                    var newState = new Option("Please Select", "", false, true);
                    $('#main_menu_id').append(newState).trigger('change');
                    return false;
                }
                $('#main_menu_id').empty();
                var newState = new Option("Please Select", "", false, true);
                $('#main_menu_id').append(newState).trigger('change');
                var select_id = $(this).val();
                $.each(link_name, function(key, val) {
                    var facility_folder = _.find(facility_id, ['id', select_id])["facility_folder"];
                    if (facility_folder == key) {
                        $.each(val, function(index, value) {
                            var newState = new Option(value.split(".")[0], value.split(".")[0], false, false);
                            $('#link_name').append(newState).trigger('change');
                        });
                    }
                });
                $.each(main_menu_id, function(index, val) {
                    var id = _.find(facility_id, ['id', val["facility_id"]])["id"];
                    if (id == select_id) {
                        var newState = new Option(val['main_menu'], val['id'], false, false);
                        $('#main_menu_id').append(newState).trigger('change');
                    }
                });
            });

            $('#main_menu_id').on('change', function() {
                if (_.isEmpty($(this).val())) {
                    $('#sub_menu_id').empty();
                    var newState = new Option("Please Select", "0", false, true);
                    $('#sub_menu_id').append(newState).trigger('change');
                    return false;
                }
                $('#sub_menu_id').empty();
                var newState = new Option("Please Select", "0", false, true);
                $('#sub_menu_id').append(newState).trigger('change');
                var select_id = $(this).val();
                $.each(sub_menu_id, function(index, val) {
                    if (val['main_menu_id'] == select_id) {
                        var newState = new Option(val['sub_menu'], val['id'], false, false);
                        $('#sub_menu_id').append(newState).trigger('change');
                    }
                });
            });
        });

    $.ajax({
            url: '../api/assignPageMenu/edit',
            type: 'POST',
            data: { id: $.urlParam("id") },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var html = "";
            $.each(data["assignMenu"], function(key, val) {
                if ((key != "editable") && (key != "status")) {
                    $("#" + key).val(val).trigger('change');
                } else {
                    if (val == "1") { $("#" + key + "1").attr('checked', 'checked'); } else if (val == "0") { $("#" + key).attr('checked', 'checked'); }
                }
            });
        });
    $("#addAssignPage").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/assignPageMenu/update',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "assignPageMenu" });
                    setTimeout(function() { window.location.href = "assignPageMenu" }, 1000);
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