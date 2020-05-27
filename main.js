// $('.custom-file-input').on('change', function () {
//     var fileName = $(this).val();
// })

// $('.custom-file-input').on('change', function () {
//     let fileName = $(this).val().split('\\').pop();
//     $(this).next('.custom-file-label').addClass("selected").html(fileName);
// });


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll < 80) {
        $('.fixed-top').css('background', 'transparent');
    } else {
        $('.fixed-top').css('background', '#38033E');
    }
});