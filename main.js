// $('.custom-file-input').on('change', function () {
//     var fileName = $(this).val();
// })

// $('.custom-file-input').on('change', function () {
//     let fileName = $(this).val().split('\\').pop();
//     $(this).next('.custom-file-label').addClass("selected").html(fileName);
// });


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var logo = $('.logoNav');
    var link = $('.nav-link');
    if (scroll < 80) {
        $('.fixed-top').css('background', 'transparent');
        logo.css('margin', '10px');
        link.css('font-size', '22px', 'padding-bottom', '5px');
    } else {
        $('.fixed-top').css('background', '#38033E');
        logo.css('margin', '-40px');
        link.css('font-size', '30px', 'padding-bottom', '-60px');
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