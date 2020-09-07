$(document).ready(function() {
    if (page != "role") { return false; }
    $.ajax({
            url: '../api/roles/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Role'] = "roleName";
            bodyOrder['User'] = "userName";
            bodyOrder['Add Role'] = "addRole";
            bodyOrder['Edit Role'] = "editRole";
            bodyOrder['Delete Role'] = "deleteRole";
            bodyOrder['View Role'] = "viewRole";
            bodyOrder['Status'] = "status";
            bodyOrder['Action'] = "action";
            var html = "";
            var index = 0;
            $.each(bodyOrder, function(key, val) {
                order[index] = key;
                $("#thead").append("<th>" + key + "</th>");
                index++;
            });
            $.each(data['roles'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a href='#'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    } else {
                        if (bodyOrder[order[index]] == "status" ||bodyOrder[order[index]] == "addRole" || bodyOrder[order[index]] == "editRole" || bodyOrder[order[index]] == "deleteRole" || bodyOrder[order[index]] == "viewRole") {
                            html += "<td>" + ((val[bodyOrder[order[index]]] == true) ? "Yes" : "No") + "</td>";
                        } else {
                            html += "<td>" + val[bodyOrder[order[index]]] + "</td>";
                        }
                    }
                });
                html += "</tr>";
            });
            $("#tbody").html(html);
            $('#table').bootstrapTable(bootstrapTableOptions);
        });
});
$(document).ready(function() {
    if (page != "addRole") { return false; }    

    $("#addRole").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/roles/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "role" });
                    setTimeout(function() { window.location.href = "role" }, 1000);
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