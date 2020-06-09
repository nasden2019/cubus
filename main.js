$(document).ready(function () {
    $(".automotor").click(function () {
        $("#automotorImg").addClass("overlay");
        $(this).hide();
        $("#automotorTexto").show();
    });
    $('.flechaSeg').click(function () {
        $('#automotorImg').removeClass("overlay");
        $(this).hide();
        $('#automotorTexto').hide();
        $('.boton#automotor').show();
    });

    $(".familia").click(function () {
        $("#familiaImg").toggleClass("overlay");
        $(this).toggle();
        $("#familiaTexto").toggle();
    });
    // $('.boton#familia').click(function () {
    //     $('#familiaImg').addClass('overlay');
    //     $(this).hide();
    //     $('#familiaTexto').show();
    // })
    $(".boton#accidentes").click(function () {
        $("#accidentesImg").addClass("overlay");
        $(this).hide();
        $("#accidentesTexto").show();
    });
    $(".flechaSeg").click(function () {
        $("#accidentesImg").removeClass("overlay");
        $(this).hide();
        $("#accidentesTexto").hide();
        $('.boton#accidentes').show();
    });
    $(".boton#industria").click(function () {
        $("#industriaImg").toggleClass("overlay");
        $(this).hide();
        $("#industriaTexto").show();
    });
    $(".boton#agro").click(function () {
        $("#agroImg").addClass("overlay");
        $('.agro').toggle();
        $("#agroTexto").toggle();
    });
    $(".boton#empleadores").click(function () {
        $("#empleadoresImg").addClass("overlay");
        $(this).hide();
        $("#empleadoresTexto").show();
    });
});


// NAVBAR desktop home
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


// DATEPICKER! seguros
Array.prototype.forEach.call(
    document.body.querySelectorAll("*[data-mask]"),
    applyDataMask
);

function applyDataMask(field) {
    var mask = field.dataset.mask.split("");

    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split("").filter(isDigit);
    }

    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask
            .map(function (char) {
                if (char != "_") return char;
                if (data.length == 0) return char;
                return data.shift();
            })
            .join("");
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

    field.addEventListener("click", changed);
    field.addEventListener("keyup", changed);
}