require("./bootstrap");

$(document).ready(function () {
    $(".js-example-basic-multiple").select2({
        placeholder: "Select lecturer name",
        allowClear: true,
    });
});
