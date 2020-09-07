$(document).ready(function() {
    if (page != "importSettings") { return false; }
    $.ajax({
            url: '../api/importData/get',
            type: 'POST',
            data: { page: page, userId: 1 },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var order = [];`fileFormat`, `formatName`, `formName`, `status`, `editable`, `description`, `sampleType`
            var bodyOrder = {};
            bodyOrder['File Format'] = "fileFormat";
            bodyOrder['Format Name'] = "formatName";
            bodyOrder['Form Name'] = "formName";
            bodyOrder['Description'] = "description";
            bodyOrder['Sample Type'] = "sampleType";
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
            $.each(data['importsettings'], function(index, val) {
                html += "<tr>";
                $.each(order, function(index, value) {
                    if (order[index]=="Action") {
                    html += "<td><a href='#'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='deleteFacility' href='#' value='" + val["id"] + "'><i class='fas fa-trash-alt'></i></a></td>";
                    }else if (order[index]=="File Format") {
                    	var fileFormat = "";
                    switch(val[bodyOrder[order[index]]]){
                    case "1":
                    	fileFormat = "CSV";
                    break;
                    case "2":
                    	fileFormat = "XML";
                    break;
                    case "3":
                    	fileFormat = "Excel";
                    break;
                	};
                	html += "<td>" + fileFormat + "</td>";
                    }else if (order[index]=="Sample Type") {
                    	var sampleType = (val[bodyOrder[order[index]]]="1")?"Yes":"No";
                    
                	html += "<td>" + sampleType + "</td>";
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
        $(document).on('click','.deleteFacility',function() {
            var id = $(this).attr('value');
            $.ajax({
                url: '../api/importData/delete',
                type: 'POST',
                data: {id:id},
            })
            .done(function(data) {
                if (data == "true") {
                    window.location.href="importSettings";
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
    if (page != "addImportSettings") { return false; }
    $("#addImport").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        var sampleForm = (formdata.get("sampleType")=="0")?$("#sampleFormat")[0]:$("#sampleFormat1")[0];
        JSON.stringify()
        formData = new FormData(sampleForm);
        var object = {};
        formData.forEach(function(value, key){
            object[key] = value;
        });
        var json = JSON.stringify(object);
        var sampleFormat = JSON.stringify(object);
        formdata.set("sampleFormat",sampleFormat)
        $.ajax({
                url: '../api/importData/saveSettings',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                if (data == "true") {
                    Swal.fire("Data Saved", "", "success")
                        .then((result) => { window.location.href = "importSettings" });
                    setTimeout(function() { window.location.href = "importSettings" }, 1000);
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