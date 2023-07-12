require("./bootstrap");

$(document).ready(function () {
    //select 2
    $(".js-example-basic-multiple").select2({
        placeholder: "Select lecturer name",
        allowClear: true,
    });

    //colorpicker
    $("#color").on("input", () => {
        var color = $("#color").val();
        $("#hex").val(color);
    });
});
