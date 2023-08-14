require("./bootstrap");
// import Noty from "noty";
// import "noty/lib/noty.css";
// import "noty/lib/themes/sunset.css";

$(document).ready(function (e) {
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

    // classItemSearch();

    //ajaxsearch
    $("#classitemsearch").on("keyup", function (e) {
        classItemSearch();
    });
    $("#coursesearchclassitem").change(function (e) {
        classItemSearch();
    });
    $("#studentsearchclassitem").change(function (e) {
        classItemSearch();
    });

    function classItemSearch() {
        var classitemsearch = $("#classitemsearch").val();
        var coursesearchclassitem = $("#coursesearchclassitem").val();
        var studentsearchclassitem = $("#studentsearchclassitem").val();

        let query = `?classitemsearch=${classitemsearch}&coursesearchclassitem=${coursesearchclassitem}&studentsearchclassitem=${studentsearchclassitem}`;

        // console.log(window.location.href + query);

        // window.location.href = window.location.href + query;
        window.history.pushState({}, "", "classitem" + query);

        // if (
        //     classitemsearch ||
        //     coursesearchclassitem ||
        //     studentsearchclassitem
        // ) {
        $(".original").hide();
        $(".find").show();
        // } else {
        //     $(".original").show();
        //     $(".find").hide();
        // }

        // if (!window.location.href.includes("search")) {
        $.ajax({
            url: "/classitemsearch",
            method: "GET",
            data: {
                classitemsearch,
                coursesearchclassitem,
                studentsearchclassitem,
            },
            success: function success(data) {
                $(".find").html(data);
            },
        });
        // } else {
        //     $.ajax({
        //         url: "/classitemfilter",
        //         method: "GET",
        //         data: {
        //             classitemsearch: classitemsearch,
        //         },
        //         success: function success(data) {
        //             $(".find").html(data);
        //         },
        //     });
        // }
    }

    //sweetalert2
    $(".alertbox").click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
                setTimeout(() => {
                    form.submit();
                }, 3000);
            }
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
    <form action="{{ route('course.store') }}" method="POST">
    <div class="row-item mb-3 grid-container">
        @csrf
        <button type="submit" class=" btn course-btn  btn-primary px-1 me-2">
            Add
        </button>

        <input type="text" name="name" class=" form-control d-inline-block"
            placeholder="Add new course">
        <button class=" btn course-btn btn-secondary px-1 ms-2 course-del">
            Cancel
        </button>
    </div>
</form>
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
