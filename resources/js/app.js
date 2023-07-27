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

    //close redirect back message
    $(".alert .close").on("click", function () {
        $(this)
            .parent()
            .fadeOut("fast", function () {
                $(this).remove();
            });
    });

    //classitem index table expend
    $(".dropdown-arrowIcon").click(function () {
        $(this).toggleClass("dropup-arrowIcon");
    });

    $(".dropdown-arrowIcon2").click(function () {
        $(this).toggleClass("dropup-arrowIcon2");
    });

    //Scheduling
    var scheduledata = JSON.parse($("#scheduler").val());
    $("td").each(function () {
        var tdId = $(this).attr("id");
        if (tdId) {
            var sliceId = tdId.slice(2, 17);
            var arr = sliceId.split("");
            var del1 = arr.splice(2, 6);
            var del2 = arr.splice(6, 1);
            var splitarr = [
                arr.splice(0, 2).join(""),
                arr.splice(0, 4).join(""),
                arr.join(""),
            ];
            $.each(
                scheduledata,
                function (index, schedule) {
                    var dbstrtime = schedule.start_time.slice(0, 2);
                    var dbstartdate = schedule.start_date.slice(5, 7);
                    var dbstartyear = schedule.start_date.slice(0, 4);
                    var timedif =
                        schedule.end_time.slice(0, 2) -
                        schedule.start_time.slice(0, 2);
                    var monthdif =
                        schedule.end_date.slice(5, 7) -
                        schedule.start_date.slice(5, 7) +
                        1;
                    var tablemonth = parseInt(splitarr[2]) + 1;

                    for (var i = 0; i < monthdif; i++) {
                        tablemonth--;
                        var tablehour = "";
                        tablehour = parseInt(splitarr[0]) + 1;
                        for (var j = -1; j < timedif; j++) {
                            tablehour--;
                            if (
                                dbstrtime == tablehour &&
                                dbstartyear == splitarr[1] &&
                                dbstartdate == tablemonth
                            ) {
                                // $(this).css("background-color", "red");
                            }
                        }
                    }
                }.bind(this)
            );
        }
    });
});

//Course Create
$("#addCourse").click(function () {
    $("#courseRow").append(`
        <div class="row-item mb-3">
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

//navbar menu btn
$(".nav-toggler").on("click", function (event) {
    event.preventDefault();
    $(".navbar-header").toggleClass("add-nav-header");
    $(".nav-toggler").toggleClass("add-nav-toggler");
    $(".navbar-brand").toggleClass("d-none");
    $(".logo-text").toggleClass("add-logo-text");
});
