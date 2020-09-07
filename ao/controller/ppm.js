$(document).ready(function() {
    if (page.slice(0, 3) == "get") {
        $.ajax({
                url: '../../api/ppm/get',
                type: 'POST',
                data: { page: page },
            })
            .done(function(response) {
                var data = JSON.parse(response);
                const footer = "";
                var order = [];
                var html = "";
                var index = 0;
                var exportOptions = "";
                $.each(bodyOrder, function(key, val) {
                    order[index] = key;
                    $("#thead").append("<th>" + key + "</th>");
                    index++;
                });
                $.each(data['ppm'], function(index, val) {
                    html += "<tr>";
                    $.each(order, function(index, value) {
                        if (order[index] == "Action") {
                            html += "<td><a href='#'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'><i class='fas fa-trash-alt'></i></a></td>";
                        } else {
                            var vale = val[bodyOrder[order[index]]];
                            html += "<td>" + ((_.isNull(vale)) ? "" : vale) + "</td>";
                        }
                    });
                    html += "</tr>";
                });
                $("#tbody").html(html);
                $('#table').bootstrapTable(bootstrapTableOptions);
                $(".fileFormat").change(function(event) {
                    var id = $(this).val();
                    var nextSelect = $(this).parents("form").children("div.form-group").children(".select").children("select").eq(1);
                    nextSelect.empty();
                    var newState = new Option("Please Select", "", false, true);
                    nextSelect.append(newState).trigger('change');
                $.each(data["exportOptions"], function(index, val) {
                    if (val["fileFormat"]==id) {
                        var newState = new Option(val["formatName"], val["formatName"], false, false);
                    nextSelect.append(newState).trigger('change');
                    }
                });
                });
            });
    }
    $("#addForm").submit(function(event) {
        event.preventDefault();
        const formdata = new FormData(this);
        $.ajax({
                url: '../../api/ppm/save',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "get" + page.split("_", 1)[0].slice(3, page.length) });
                    setTimeout(function() { window.location.href = "get" + page.split("_", 1)[0].slice(3, page.length) }, 1000);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: _.startCase(data) + " is missing"
                    })
                }
            });
    });
    // $('#sampleTypeModal').on('hidden.bs.modal', function (e) {
    //             $("form div").empty();
    //         });

});
    $("#importDataForm").submit(function(event) {
        event.preventDefault();
        if (_.isEmpty(excelRows)) {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: "Please select a file to import"
                    });
                    return;
                }
        var formdata = new FormData(this);
        formdata.append("fileData",JSON.stringify(excelRows));
        $.ajax({
                url: '../../api/importData/importFromFile',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "get" + page.split("_", 1)[0].slice(3, page.length) });
                    setTimeout(function() { window.location.href = "get" + page.split("_", 1)[0].slice(3, page.length) }, 1000);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: _.startCase(data) + " is missing"
                    })
                }
            });
    });