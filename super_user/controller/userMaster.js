$(document).ready(function() {
    if (page != "user") { return false; }
    $.ajax({
            url: '../api/user/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Name'] = "name";
            bodyOrder['User Name'] = "userName";
            bodyOrder['Password'] = "password";
            bodyOrder['Email'] = "email";
            bodyOrder['Mobile'] = "mobile";
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
    if (page != "addUser") { return false; }
    $("#addUser").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/user/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "user" });
                    setTimeout(function() { window.location.href = "user" }, 1000);
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
    if (page != "userMenuRole") { return false; }
        $.ajax({
                url: '../api/user/getMenuRole',
                type: 'POST',
                data: {userId:$.urlParam("id")},
            })
            .done(function(response) {
            var data = JSON.parse(response);
            var role = JSON.parse(data["userMenuRole"].role);
            $.each(role, function(key, val) {
                if (val==true) {$('#'+key+'status').attr("checked", "checked").trigger("change");}
            });
            });
    $("#userMenuRole").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
                url: '../api/user/saveMenuRole',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "user" });
                    setTimeout(function() { window.location.href = "user" }, 1000);
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