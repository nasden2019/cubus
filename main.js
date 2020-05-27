// $('.custom-file-input').on('change', function () {
//     var fileName = $(this).val();
// })

// $('.custom-file-input').on('change', function () {
//     let fileName = $(this).val().split('\\').pop();
//     $(this).next('.custom-file-label').addClass("selected").html(fileName);
// });
var i = 0;
$(".navBarra")
    .mouseover(function () {
        i += 1;
        $(this).find("span").text("mouse over x " + i);
    })
    .mouseout(function () {
        $(this).find("span").text("mouse out ");
    });

var n = 0;
$("div.enterleave")
    .mouseenter(function () {
        n += 1;
        $(this).find("span").text("mouse enter x " + n);
    })
    .mouseleave(function () {
        $(this).find("span").text("mouse leave");
    });