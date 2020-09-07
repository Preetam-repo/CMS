$(document).ready(function() {
    if (page != "aoMaster") { return false; }
    $.ajax({
            url: '../api/aoMaster/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['AssociateId'] = "associateId";
            bodyOrder['Name'] = "name";
            bodyOrder['User Name'] = "userName";
            bodyOrder['Password'] = "password";
            bodyOrder['Email'] = "email";
            bodyOrder['Mobile'] = "mobile";
            bodyOrder['Url'] = "url";
            bodyOrder['Login Link'] = "loginLink";
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
                    html += "<td><a href='addRole?id=" + val["id"] + "'>Role</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
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
    if (page != "addAo") { return false; }
    $("#addAo").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../api/aoMaster/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "aoMaster" });
                    setTimeout(function() { window.location.href = "aoMaster" }, 1000);
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