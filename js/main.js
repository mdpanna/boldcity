$(document).ready(function () {
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 350) {
            $(".header-part").addClass("header-part_active");
        } else {
            $(".header-part").removeClass("header-part_active");

        }
    })



    $("#mail1").on('submit', function (e) {
        e.preventDefault();


        $.ajax({
            url: 'https://theketomatrix.com/test/index.php',
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                $("#mail")[0].reset();
                swal("Thank you!", "A Member of Our Team Will Be in Touch Within 24 Business Hours.", "success");


            }

        });
    });





})
