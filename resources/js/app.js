require("./bootstrap");

$(document).ready(function () {
    //select 2
    $(".js-example-basic-multiple").select2({
        placeholder: "Select days",
        allowClear: true,
    });

    //colorpicker
    $("#color").on("input", () => {
        var color = $("#color").val();
        $("#hex").val(color);
    });

    //classitem index table expend
    // $(".dropdown-arrowIcon").click(function () {
    //     $(this).toggleClass("dropup-arrowIcon");
    // });

    // $(".dropdown-arrowIcon2").click(function () {
    //     $(this).toggleClass("dropup-arrowIcon2");
    // });

    //control-icon(edit delete detail)
    $(".contro-ion").on("click", function () {
        $(this).siblings(".contro-cotainr").removeClass("d-none");
        $(".blurbg").addClass("rmv");
    });

    $(".hbg").on("click", function () {
        $(".contro-cotainr").addClass("d-none");
        $(".blurbg").removeClass("rmv");
    });
});

//Course Create
$("#addCourse").click(function () {
    $("#courseRow").append(`
        <div class=" mb-3">
        <a href="" class=" btn course-btn  btn-primary px-1 me-2">
            Add
        </a>

        <input type="text" class=" form-control d-inline-block" placeholder="Add new course" >
        <button class=" btn course-btn btn-secondary px-1 ms-2 course-del">
            Cancel
        </button>
        </div>

    `);
});

$(".course-row").delegate(".course-del", "click", function () {
    $(this).parent().remove();
});
