// $('.custom-file-input').on('change', function () {
//     var fileName = $(this).val();
// })

// $('.custom-file-input').on('change', function () {
//     let fileName = $(this).val().split('\\').pop();
//     $(this).next('.custom-file-label').addClass("selected").html(fileName);
// });

// SCROLL NAVBAR DESKTOP: cambio de color, size and margin
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var logo = $('.logoNav');
    var navLinks = $('.navbar-collapse');
    var link = $('.nav-link');
    if (scroll < 80) {
        $('.fixed-top').css('background', 'transparent');
        logo.css('margin', '10px');
        navLinks.css('margin-top', '15px');
        link.css('font-size', '22px');
        $('.navBarra').css("height", "90px");
    } else {
        $('.fixed-top').css('background', '#38033E');
        logo.css('margin', '-95px');
        navLinks.css('margin-top', '-85px');
        link.css('font-size', '30px');
        $('.navBarra').css("height", "150px");
    }
});

// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//     document.getElementById("navbar").style.padding = "30px 10px";
//     document.getElementById("logo").style.fontSize = "25px";
//   } else {
//     document.getElementById("navbar").style.padding = "80px 10px";
//     document.getElementById("logo").style.fontSize = "35px";
//   }
// } 