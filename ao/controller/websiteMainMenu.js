$(document).ready(function() {
    if (page != "websiteMainMenu") { return false; }
    $.ajax({
            url: base_url + 'api/aoWebsiteManagement/getMainMenu',
            type: 'POST',
            data: { aoId: aoId },
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
                        html += "<td><a href='addWebsiteMainMenu?id=" + val["id"] + "'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                        url: base_url + 'api/aoWebsiteManagement/deleteMainMenu',
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
            url: base_url + 'api/aoWebsiteManagement/getChildMenu',
            type: 'POST',
            data: { aoId: aoId },
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
                        html += "<td><a href='addWebsiteChildMenu?id=" + val["id"] + "'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                        url: base_url + 'api/aoWebsiteManagement/deleteChildMenu',
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
            url: base_url + 'api/aoWebsiteManagement/getMainSubMenu',
            type: "POST",
            data: { aoId: aoId },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var newState = new Option("Please Select", "", false, true);
            $('#main_menu_id').append(newState).trigger('change');
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
            if ($.urlParam("id") != null) {
                $.ajax({
                        url: base_url + 'api/aoWebsiteManagement/getChildMenu',
                        type: 'POST',
                        data: { id: $.urlParam("id"), aoId: aoId },
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
        });
    $("#addWebsiteChildMenu").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        formdata.set("aoId",aoId);
        $.ajax({
                url: base_url + 'api/aoWebsiteManagement/saveChildMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success");
                    $("#"+page)[0].reset();
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
                url: base_url + 'api/aoWebsiteManagement/getMainMenu',
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
        var formdata = new FormData(this);
        formdata.set("aoId",aoId);
        $.ajax({
                url: base_url + 'api/aoWebsiteManagement/saveMainMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success");
                    $("#"+page)[0].reset();
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
            url: base_url + 'api/aoWebsiteManagement/getSubMenu',
            type: 'POST',
            data: { aoId: aoId },
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
                        html += "<td><a href='addWebsiteSubMenu?id=" + val["id"] + "'><i class='fas fa-pencil-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteRow' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
                        url: base_url + 'api/aoWebsiteManagement/deleteSubMenu',
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
            url: base_url + 'api/aoWebsiteManagement/getMainMenu',
            type: 'POST',
            data: { aoId: aoId },
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
                url: base_url + 'api/aoWebsiteManagement/getSubMenu',
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
        var formdata = new FormData(this);
        formdata.set("aoId",aoId);
        $.ajax({
                url: base_url + 'api/aoWebsiteManagement/saveSubMenu',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success");
                    $("#"+page)[0].reset();
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