$(document).ready(function() {
    if (page != "subMenu") { return false; }
    $.ajax({
            url: '../api/subMenu/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            const footer = "";
            var order = [];
            var bodyOrder = {};
            // bodyOrder[''] = "";
            bodyOrder['SRN'] = "srn";
            bodyOrder['Main Menu Category'] = "main_menu";
            bodyOrder['Sub Menu Category'] = "sub_menu";
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
            $.each(data['subMenu'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index]=="Action") {
                    html += "<td><a href='editSubMenu?id=" + val["id"] + "'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteSubMenu' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
        $(document).on('click','.deleteSubMenu',function() {
            var id = $(this).attr('value');
            $.ajax({
                url: '../api/subMenu/delete',
                type: 'POST',
                data: {id:id},
            })
            .done(function(data) {
                if (data == "true") {
                    window.location.href="subMenu";
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
    if (page != "addSubMenu") { return false; }
    $.ajax({
            url: '../api/mainMenu/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var html = "";
            $.each(data["mainMenu"], function(index, val) {
                var newState = new Option(val['main_menu'], val['id'], false, false);
                $('#main_menu_id').append(newState).trigger('change');
            });
        });
    $("#addSubMenu").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/subMenu/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "subMenu" });
                    setTimeout(function() { window.location.href = "subMenu" }, 1000);
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
    if (page != "editSubMenu") { return false; }
    $.ajax({
            url: '../api/mainMenu/get',
            type: 'POST',
            async: false,
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var html = "";
            $.each(data["mainMenu"], function(index, val) {
                var newState = new Option(val['main_menu'], val['id'], false, false);
                $('#main_menu_id').append(newState).trigger('change');
            });
        });
            $.ajax({
            url: '../api/subMenu/edit',
            type: 'POST',
            data: { id: $.urlParam("id") },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var html = "";
            $.each(data["subMenu"], function(key, val) {
                if ((key!="editable")&&(key!="status")) {
                $("#"+key).val(val).trigger('change');
            }else {
                if(val=="1"){$("#"+key+"1").attr('checked', 'checked');}
                else if(val=="0"){$("#"+key).attr('checked', 'checked');}
            }
            });
        });
    $("#addSubMenu").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/subMenu/update',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "subMenu" });
                    setTimeout(function() { window.location.href = "subMenu" }, 1000);
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