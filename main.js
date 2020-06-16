$(document).ready(function () {
    // boton automotor inicial que despliega info al hacer click:
    $(".boton#automotor").click(function () {
        // agrega color violeta a la img q ya tenemos:
        $("#automotorImg").addClass("overlay");
        // esconde boton q cliqueamos: 
        $(this).hide();
        // muestra texto y boton de modal q contienen esta clase: 
        $("#automotorTexto").show();
        // para q vuelva a mostrar la flechita:
        $('.flechaSeg.uno').show();
    });
    // flechita gris para ocultar todo y volver al inicio
    $('.flechaSeg.uno').click(function () {
        // quita clase violeta:
        $('#automotorImg').removeClass("overlay");
        // se esconde (y la volvemos a mostrar arriba con show()): 
        $(this).hide();
        // ocultamos texto y btn modal:
        $('#automotorTexto').hide();
        // volvemos a mostrar boton del inicio:
        $('.boton#automotor').show();
    });

    // boton familia que muestra 
    $(".boton#familia").click(function () {
        $("#familiaImg").addClass("overlay");
        $(this).toggle();
        $("#familiaTexto").show();
        $('.flechaSeg.dos').show();
    });
    // boton flecha familia que oculta
    $('.flechaSeg.dos').click(function () {
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
        $('.flechaSeg.tres').show();
    });
    $(".flechaSeg.tres").click(function () {
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
        $('.flechaSeg.cuatro').show();
    });
    $(".flechaSeg.cuatro").click(function () {
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
        $('.flechaSeg.cinco').show();
    });
    $(".flechaSeg.cinco").click(function () {
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
        $('.flechaSeg.seis').show();
    });
    $(".flechaSeg.seis").click(function () {
        $("#empleadoresImg").removeClass("overlay");
        $(this).hide();
        $("#empleadoresTexto").hide();
        $('.boton#empleadores').show();
    });

});


// NAVBAR desktop home
$(window).scroll(function () {
    // cdo no es mobile:
    if (screen.width > 768) {
        // y el menu se haya scrolleado a mas de 56px, q haga todo esto:
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


// home display 3 divs
$(document).ready(function () {
    $('.boton#confianza').click(function () {
        $('#confianzaImg').addClass('overlay');
        $(this).hide();
        $('#confianzaTexto').show();
    })
    $('.boton#familia').click(function () {
        $('#familiaImg').addClass('overlay');
        $(this).hide();
        $('#familiaTexto').show();
    })
    $('.boton#profesionalismo').click(function () {
        $('#profesionalismoImg').addClass('overlay');
        $(this).hide();
        $('#profesionalismoTexto').show();
    })
})

// disabled scroll mouse / map zoom in/out
var onMapMouseleaveHandler = function (event) {
    var that = $(this);

    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('iframe').css("pointer-events", "none");
}

var onMapClickHandler = function (event) {
    var that = $(this);

    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);

    // Enable scrolling zoom
    that.find('iframe').css("pointer-events", "auto");

    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
}

// Enable map zooming with mouse scroll when the user clicks the map
$('.maps.embed-container').on('click', onMapClickHandler);