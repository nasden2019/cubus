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


// ICON MAP
// var iconBase = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13393.206063450687!2d-60.65802!3d-32.943048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91a29ca796372019!2sCubus%20Broker%20de%20Seguros!5e0!3m2!1sen!2sar!4v1591112958654!5m2!1sen!2sar';
// var marker = new google.maps.Marker({
//     position: myLatLng,
//     map: map,
//     icon: iconBase + 'logo-mobile.png'
// });

// var map;

// function initMap() {
//     map = new google.maps.Map(
//         document.getElementById('map'), {
//             center: new google.maps.LatLng(-33.91722, 151.23064),
//             zoom: 16
//         });

//     var iconBase =
//         'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

//     var icons = {
//         parking: {
//             icon: iconBase + 'parking_lot_maps.png'
//         },
//         library: {
//             icon: iconBase + 'library_maps.png'
//         },
//         info: {
//             icon: iconBase + 'info-i_maps.png'
//         }
//     };

//     var features = [{
//         position: new google.maps.LatLng(-33.91721, 151.22630),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91539, 151.22820),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91747, 151.22912),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91910, 151.22907),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91725, 151.23011),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91872, 151.23089),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91784, 151.23094),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91682, 151.23149),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91790, 151.23463),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91666, 151.23468),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.916988, 151.233640),
//         type: 'info'
//     }, {
//         position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
//         type: 'parking'
//     }, {
//         position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
//         type: 'library'
//     }];

//     // Create markers.
//     for (var i = 0; i < features.length; i++) {
//         var marker = new google.maps.Marker({
//             position: features[i].position,
//             icon: icons[features[i].type].icon,
//             map: map
//         });
//     };
// }