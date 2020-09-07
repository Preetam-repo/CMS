$(document).ready(function() {
    if (page != "websiteMainMenu") { return false; }
    $.ajax({
            url: '../api/websiteManagement/getMainMenu',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['SRN'] = "srn";
            bodyOrder['Main Menu'] = "main_menu";
            bodyOrder['Link'] = "linkm";
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
            $.each(data['websiteMainMenu'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a href='addWebsiteMainMenu?id="+val["id"]+"'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                    $('#table').bootstrapTable('hideColumn', order[key]);

                });
            }
            $(document).on('click', '.deleteRow', function() {
                var id = $(this).attr('value');
                $.ajax({
                        url: '../api/websiteManagement/deleteMainMenu',
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
    if (page != "websiteChildMenu") { return false; }
    $.ajax({
            url: '../api/websiteManagement/getChildMenu',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['SRN'] = "srn";
            bodyOrder['Main Menu'] = "main_menu";
            bodyOrder['Sub Menu'] = "sub_menu";
            bodyOrder['Child Menu'] = "child_menu";
            bodyOrder['Link'] = "linkc";
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
            $.each(data['websiteChildMenu'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a href='addWebsiteChildMenu?id="+val["id"]+"'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                    $('#table').bootstrapTable('hideColumn', order[key]);

                });
            }
            $(document).on('click', '.deleteRow', function() {
                var id = $(this).attr('value');
                $.ajax({
                        url: '../api/websiteManagement/deleteChildMenu',
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
    if (page != "addWebsiteChildMenu") { return false; }
    $.ajax({
            url: '../api/websiteManagement/getMainSubMenu'
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $.each(data["mainMenu"], function(index, val) {
                var newState = new Option(val['main_menu'], val['id'], false, false);
                $('#main_menu_id').append(newState).trigger('change');
            });
            $(document).on("change", "#main_menu_id", function() {
                var id = $(this).val();
                var select = $("#sub_menu_id");
                select.empty();
                if (id == "") { return; }
                $.each(data["subMenu"], function(index, val) {
                    if (val["main_menu_id"] == id) {
                        var newState = new Option(val['sub_menu'], val['id'], false, false);
                        select.append(newState).trigger('change');
                    }
                });
            });
        });
    if ($.urlParam("id") != null) {
        $.ajax({
                url: '../api/websiteManagement/getChildMenu',
                type: 'POST',
                data: { id: $.urlParam("id") },
            })
            .done(function(response) {
                var data = JSON.parse(response);
                $.each(data["menu"], function(index, val) {
                    $.each(val, function(key, value) {
                        $("#" + key).val(value).trigger("change");
                    });
                });
            });

    }
    $("#addWebsiteChildMenu").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/websiteManagement/saveChildMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "websiteChildMenu" });
                    setTimeout(function() { window.location.href = "websiteChildMenu" }, 1000);
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
    if (page != "addWebsiteMainMenu") { return false; }
    if ($.urlParam("id") != null) {
        $.ajax({
                url: '../api/websiteManagement/getMainMenu',
                type: 'POST',
                data: { id: $.urlParam("id") },
            })
            .done(function(response) {
                var data = JSON.parse(response);
                $.each(data["menu"], function(index, val) {
                    $.each(val, function(key, value) {
                        $("#" + key).val(value).trigger("change");
                    });
                });
            });

    }
    $("#addWebsiteMainMenu").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/websiteManagement/saveMainMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "websiteMainMenu" });
                    setTimeout(function() { window.location.href = "websiteMainMenu" }, 1000);
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
    if (page != "websiteSubMenu") { return false; }
    $.ajax({
            url: '../api/websiteManagement/getSubMenu',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['SRN'] = "srn";
            bodyOrder['Main Menu'] = "main_menu";
            bodyOrder['Sub Menu'] = "sub_menu";
            bodyOrder['Link'] = "links";
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
            $.each(data['websiteSubMenu'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a href='addWebsiteSubMenu?id="+val["id"]+"'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                    $('#table').bootstrapTable('hideColumn', order[key]);

                });
            }
            $(document).on('click', '.deleteRow', function() {
                var id = $(this).attr('value');
                $.ajax({
                        url: '../api/websiteManagement/deleteSubMenu',
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
    if (page != "addWebsiteSubMenu") { return false; }
    $.ajax({
            url: '../api/websiteManagement/getMainMenu',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $.each(data['websiteMainMenu'], function(index, val) {
                var newState = new Option(val['main_menu'], val['id'], false, false);
                $('#main_menu_id').append(newState).trigger('change');
            });
        });
    if ($.urlParam("id") != null) {
        $.ajax({
                url: '../api/websiteManagement/getSubMenu',
                type: 'POST',
                data: { id: $.urlParam("id") },
            })
            .done(function(response) {
                var data = JSON.parse(response);
                $.each(data["menu"], function(index, val) {
                    $.each(val, function(key, value) {
                        $("#" + key).val(value).trigger("change");
                    });
                });
            });
    }
    $("#addWebsiteSubMenu").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/websiteManagement/saveSubMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "websiteSubMenu" });
                    setTimeout(function() { window.location.href = "websiteSubMenu" }, 1000);
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