$(".button-scroll").click(function() {
    $('html,body').animate({
            scrollTop: $("#contact-form").offset().top},
        'slow');
});

$('.head-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3200,
});

document.getElementById("year").innerHTML = new Date().getFullYear();

var phone = $("#phone");
phone.keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
});

