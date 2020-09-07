$(document).ready(function() {
    if (page != "websiteNewsletterSubscription") { return false; }
    $.ajax({
            url: '../api/aoWebsiteManagement/getWebsiteNewsletterSubscription',
            type: 'POST',
            data: {aoId:aoId},
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['E mail'] = "email";
            var html = "";
            var index = 0;
            $.each(bodyOrder, function(key, val) {
                order[index] = key;
                $("#thead").append("<th>" + key + "</th>");
                index++;
            });
            $.each(data['newsletterSubscription'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a class='viewQuery' href='#' value='" + val["id"] + "'><i class='fa fa-eye'></i></a></td>";
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
});
});
$(document).ready(function() {
    if (page != "websiteContactUs") { return false; }
    $.ajax({
            url: '../api/aoWebsiteManagement/getWebsiteContactUs',
            type: 'POST',
            data: {aoId:aoId},
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];
            var bodyOrder = {};
            bodyOrder['Name'] = "name";
            bodyOrder['Phone'] = "phone";
            bodyOrder['E mail'] = "email";
            bodyOrder['Subject'] = "subject";
            bodyOrder['Action'] = "action";
            bodyOrder['Action'] = "action";
            var html = "";
            var index = 0;
            $.each(bodyOrder, function(key, val) {
                order[index] = key;
                $("#thead").append("<th>" + key + "</th>");
                index++;
            });
            $.each(data['websiteContactUs'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index] == "Action") {
                        html += "<td><a class='viewQuery' href='#' value='" + val["id"] + "'><i class='fa fa-eye'></i></a></td>";
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
            $(document).on('click', '.viewQuery', function() {
                    var id = $(this).attr('value');
                    var comment;
                    comment = _.find(data['websiteContactUs'],{"id":id});
                    Swal.fire(
							  comment.subject,
							  comment.query,
							)
	                });
        });
});