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
        if ($("#menu").offset().top > 56) {
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

Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

function applyDataMask(field) {
    var mask = field.dataset.mask.split('');

    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split('').filter(isDigit);
    }

    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask.map(function (char) {
            if (char != '_') return char;
            if (data.length == 0) return char;
            return data.shift();
        }).join('')
    }

    function reapplyMask(data) {
        return applyMask(stripMask(data));
    }

    function changed() {
        var oldStart = field.selectionStart;
        var oldEnd = field.selectionEnd;

        field.value = reapplyMask(field.value);

        field.selectionStart = oldStart;
        field.selectionEnd = oldEnd;
    }

    field.addEventListener('click', changed)
    field.addEventListener('keyup', changed)
}

// $(document).ready(function () {
//     $('#birth-date').mask('00/00/0000');
//     $('#phone-number').mask('0000-0000');
// });

// $("#date").inputmask({
//     "mask": "(999) 999-9999"
// });