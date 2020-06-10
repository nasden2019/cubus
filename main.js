$(document).ready(function () {
    // boton automotor inicial que muestra 
    $(".boton#automotor").click(function () {
        $("#automotorImg").addClass("overlay");
        $(this).hide();
        $("#automotorTexto").show();
    });
    // flechita gris para ocultar todo y volver al inicio
    $('.flechaSeg').click(function () {
        $('#automotorImg').removeClass("overlay");
        $(this).hide();
        $('#automotorTexto').hide();
        $('.boton#automotor').show();
    });

    // boton familia que muestra 
    $(".boton#familia").click(function () {
        $("#familiaImg").addClass("overlay");
        $(this).toggle();
        $("#familiaTexto").show();
    });
    // boton flecha familia que oculta
    $('.flechaSeg').click(function () {
        $('#familiaImg').removeClass('overlay');
        $(this).hide();
        $('#familiaTexto').hide();
        $('.boton#familia').show();
    })

    // accidentes
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

    // Industria
    $(".boton#industria").click(function () {
        $("#industriaImg").addClass("overlay");
        $(this).hide();
        $("#industriaTexto").show();
    });
    $(".flechaSeg").click(function () {
        $("#industriaImg").removeClass("overlay");
        $(this).hide();
        $("#industriaTexto").hide();
        $('.boton#industria').show();
    });

    // Agro
    $(".boton#agro").click(function () {
        $("#agroImg").addClass("overlay");
        $(this).hide();
        $("#agroTexto").show();
    });
    $(".flechaSeg").click(function () {
        $("#agroImg").removeClass("overlay");
        $(this).hide();
        $("#agroTexto").hide();
        $('.boton#agro').show();
    });

    // Empleadores
    $(".boton#empleadores").click(function () {
        $("#empleadoresImg").addClass("overlay");
        $(this).hide();
        $("#empleadoresTexto").show();
    });
    $(".flechaSeg").click(function () {
        $("#empleadoresImg").removeClass("overlay");
        $(this).hide();
        $("#empleadoresTexto").hide();
        $('.boton#empleadores').show();
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

// ICON MAP
var iconBase = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13393.206063450687!2d-60.65802!3d-32.943048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91a29ca796372019!2sCubus%20Broker%20de%20Seguros!5e0!3m2!1sen!2sar!4v1591112958654!5m2!1sen!2sar';
var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: iconBase + 'logo-mobile.png'
});