// $('.custom-file-input').on('change', function () {
//     var fileName = $(this).val();
// })

// $('.custom-file-input').on('change', function () {
//     let fileName = $(this).val().split('\\').pop();
//     $(this).next('.custom-file-label').addClass("selected").html(fileName);
// });

// SCROLL NAVBAR DESKTOP: cambio de color, size and margin
// $(window).scroll(function () {
//     var scroll = $(window).scrollTop();
//     var logo = $('.logoNav');
//     var navLinks = $('.navbar-collapse');
//     var link = $('.nav-link');
//     if (scroll < 80) {
//         $('.fixed-top').css('background', 'transparent');
//         logo.css('margin', '10px');
//         navLinks.css('margin-top', '15px');
//         link.css('font-size', '22px');
//         $('.navBarra').css("height", "90px");
//     } else {
//         $('.fixed-top').css('background', '#38033E');
//         logo.css('margin', '-95px');
//         navLinks.css('margin-top', '-85px');
//         link.css('font-size', '30px');
//         $('.navBarra').css("height", "150px");
//     }
// });

// hamburger menu 
// $(document).ready(function () {
//     $('#nav-icon1').click(function () {
//         $(this).toggleClass('open');
//     });
// });
$(window).scroll(function () {
    if (screen.width > 768) {
        if ($("#menu").offset().top > 56 ) {
            $("#menu").addClass("footerVioleta");
            $("#menu").addClass("shadow-sm");
            $("#menu").removeClass("footer-transparente");
        } else {
            $("#menu").addClass("footer-transparente");
            $("#menu").removeClass("footerVioleta");
            $("#menu").removeClass("shadow-sm");
        }
    } else {
        $("#menu").addClass("footerVioleta");

    }
});
// if ($('#menu-blanco').length) {
//     $(".nav-link").addClass("text-primary");
//     $("#menu-blanco").addClass("shadow-sm");
// }