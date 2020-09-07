$("#addPage").submit(function(event) {
    event.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
            url: base_url+'api/websitePage/savePage',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (JSON.parse(data) == true) {
                Swal.fire("Data Saved", "", "success")
                    .then((result) => { window.location.href = "pageMaster" });
                setTimeout(function() { window.location.href = "pageMaster" }, 1000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: _.startCase(data) + " is missing"
                })
            }
        });
});
$(document).ready(function() {
    if ((page == "services") || (page == "features") || (page == "articles") || (page == "team") || (page == "clienttestimonial") || (page == "client") || (page == "counter") || (page == "countdowntimer") || (page == "faq")) {
        $.ajax({
                url: '../../api/websitePage/getData',
                type: 'POST',
                data: { page: page, userId: 1 },
            })
            .done(function(response) {
                var data = JSON.parse(response);
                if (data["sections"] == null) { return; }
                var order = [];
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
                $.each(data['sections'], function(index, val) {
                    html += "<tr>";
                    $.each(order, function(index, value) {
                        if (order[index] == "Action") {
                            html += "<td><a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                        } else {
                            html += "<td>" + val[bodyOrder[order[index]]] + "</td>";
                        }
                    });
                    html += "</tr>";
                });
                $("#tbody").html(html);
                $('#table').bootstrapTable(bootstrapTableOptions);
                $(document).on('click', '.deleteRow', function() {
                    var id = $(this).attr('value');
                    $.ajax({
                            url: '../../api/websitePage/deleteData',
                            type: 'POST',
                            data: { page: page, id: id },
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
    }
});
$(document).ready(function() {
    if (page != "pageMaster") { return false; }
    $.ajax({
            url: base_url+'api/websitePage/getPage',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Title'] = "title";
            bodyOrder['Header'] = "header";
            bodyOrder['Link'] = "link";
            bodyOrder['Status'] = "status";
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
            $.each(data['webpage'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a href='addPage?id=" + val["id"] + "'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    } else {
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
            $(document).on('click', '.deleteRow', function() {
                    var id = $(this).attr('value');
                    $.ajax({
                            url: base_url+'api/websitePage/deletePage',
                            type: 'POST',
                            data: { page: page, id: id },
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
    if (page != "assignWebpageMenu") { return false; }
    $.ajax({
            url: '../api/websitePage/viewAssignWebpage',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['MainMenu'] = "mainMenu";
            bodyOrder['SubMenu'] = "subMenu";
            bodyOrder['Webpage'] = "webpage";
            bodyOrder['SRN'] = "srn";
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
            $.each(data['assign_webpage_view'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    } else {
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
            $(document).on('click', '.deleteRow', function() {
                    var id = $(this).attr('value');
                    $.ajax({
                            url: '../api/websitePage/deleteAssignWebpage',
                            type: 'POST',
                            data: { id: id },
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
    if (page != "addAssignWebpageMenu") { return false; }
    $.ajax({
            url: '../api/websitePage/getAssignWebpage',
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $.each(data["webPage"], function(index, val) {
                var newState = new Option(val["header"], val["id"], false, false);
                $('#webpage').append(newState).trigger('change');
            });
            $.each(data["mainMenu"], function(index, val) {
                var newState = new Option(val["main_menu"], val["id"], false, false);
                $('#main_menu_id').append(newState).trigger('change');
            });
            $(document).on('change', '#main_menu_id', function(event) {
                $('#sub_menu_id').empty();
                var newState = new Option("Please Select", "0", false, false);
                $('#sub_menu_id').append(newState).trigger('change');
                if ($(this).val() == "") { return; }
                var id = $(this).val();
                $.each(data["subMenu"], function(index, val) {
                    if (id == val["main_menu_id"]) {
                        var newState = new Option(val["sub_menu"], val["id"], false, false);
                        $('#sub_menu_id').append(newState).trigger('change');
                    }
                });
            });
        });
});

$("#addAssignWebpage").submit(function(event) {
    event.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
            url: '../api/websitePage/saveAssignWebpage',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (JSON.parse(data) == true) {
                Swal.fire("Data Saved", "", "success")
                    .then((result) => { window.location.href = "assignWebpageMenu" });
                setTimeout(function() { window.location.href = "assignWebpageMenu" }, 1000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: _.startCase(data) + " is missing"
                })
            }
        });
});
$("#add" + page.slice(3, page.length)).submit(function(event) {
    event.preventDefault();
    var formdata = new FormData(this);
    formdata.set("action", page.slice(3, page.length).toLowerCase());
    $.ajax({
            url: '../../api/websitePage/saveData',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (data == "true") {
                Swal.fire("Data Saved", "", "success")
                    .then((result) => { window.location.href = page.slice(3, page.length).toLowerCase() });
                setTimeout(function() { window.location.href = page.slice(3, page.length).toLowerCase() }, 1000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: _.startCase(data) + " is missing"
                })
            }
        });
});
$(document).ready(function() {
    if (page != "sectionManagement") { return false; }
    $.ajax({
            url: '../api/websitePage/getStyles',
            type: 'POST',
            data: { id: 0 },
            processData: false,
            contentType: false,
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $.each(data, function(key, val) {
                var keyId = key;
                if (!((keyId == "id") || (keyId == "created_date"))) {
                    $.each(JSON.parse(val), function(key, value) {
                        if (key == "status") {
                            if (value == "1") {
                                $("#" + keyId + key).attr("checked", "checked").trigger("change")
                            };
                        } else {
                            $("#" + keyId + key).val(value).trigger("change");
                        }
                    });
                }
            });
        });
    $("#sectionStyle").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
                url: '../api/websitePage/saveStyles',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success");
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