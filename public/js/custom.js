$(document).on("keydown", ".onlyNumber", function (event) {
    if (event.keyCode == 190 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            (event.keyCode == 65 && event.ctrlKey === true) ||
            (event.keyCode == 67 && event.ctrlKey === true) ||
            (event.keyCode == 86 && event.ctrlKey === true) ||
            (event.keyCode >= 35 && event.keyCode <= 39)) {
        return;
    } else {
        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
            event.preventDefault();
        }
    }
});

$(document).on("click", "#saverecord", function (event) {
    var formdata = new FormData($('#productForm')[0]);
    $.ajax({
        url: "/saveProduct",
        type: 'POST',
        data: formdata,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function (responce) {
            if (responce == 0) {
                $(".saved_detail").removeClass("hide");
                $("#r_p_name").html($("#p_name").val());
                $("#r_p_quantity").html($("#p_quantity").val());
                $("#r_p_price").html($("#p_price").val());
                $(".alert-success").removeClass("hide");
                setTimeout(function () {
                    $(".alert-success").addClass("hide");
                }, 2000);
            } else {

            }

        },
        error: function () {
            location.reload();
        }
    });
});