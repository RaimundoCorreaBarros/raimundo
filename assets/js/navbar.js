$(window).scroll(function() {
    if ($("nav").offset().top > 350) {
        $("nav").addClass("bg-color");
        // $("nav").addClass("navbar-dark");
        // $("nav").removeClass("navbar-light");
        $("nav").removeClass("bg-light");
    } else {
        $("nav").removeClass("bg-color");
        // $("nav").removeClass("navbar-dark");
        // $("nav").addClass("navbar-light");
        $("nav").addClass("bg-light");
    }
});