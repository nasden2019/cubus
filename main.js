// confianza 
const contentCon = document.querySelector('#confianzaTexto');
const flechaCon = document.querySelector('.flechaCon');
const botonCon = document.querySelector('.botonCon');
const imgCon = document.querySelector('#confianzaImg')

botonCon.addEventListener('click', (e) => {
  e.target.style.display = "none"
  contentCon.classList.remove('d-none');
  imgCon.classList.add('overlayPink')
})
flechaCon.addEventListener('click', () => {
  contentCon.classList.add('d-none');
  botonCon.style.display = "block";
  imgCon.classList.remove('overlayPink')
})


// etica
const contentEti = document.querySelector('#eticaTexto');
const flechaEti = document.querySelector('.flechaEti');
const botonEti = document.querySelector('.botonEti');
const imgEti = document.querySelector('#eticaImg')

botonEti.addEventListener('click', (e) => {
  e.target.style.display = "none"
  contentEti.classList.remove('d-none');
  imgEti.classList.add('overlay')
})
flechaEti.addEventListener('click', () => {
  contentEti.classList.add('d-none');
  botonEti.style.display = "block";
  imgEti.classList.remove('overlay')
})

//profesionalismo 
const contentProf = document.querySelector('#profTexto');
const flechaProf = document.querySelector('.flechaProf');
const botonProf = document.querySelector('.botonProf');
const imgProf = document.querySelector('#profImg')

botonProf.addEventListener('click', (e) => {
  e.target.style.display = "none"
  contentProf.classList.remove('d-none');
  imgProf.classList.add('overlayPink')
})
flechaProf.addEventListener('click', () => {
  contentProf.classList.add('d-none');
  botonProf.style.display = "block";
  imgProf.classList.remove('overlayPink')
})



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
  $(".boton#confianza").click(function () {
    $("#confianzaImg").addClass("overlay");
    $(this).hide();
    $("#confianzaTexto").show();
  });
  $(".boton#familia").click(function () {
    $("#familiaImg").addClass("overlay");
    $(this).hide();
    $("#familiaTexto").show();
  });
  $(".boton#profesionalismo").click(function () {
    $("#profesionalismoImg").addClass("overlay");
    $(this).hide();
    $("#profesionalismoTexto").show();
  });
});

// disabled scroll mouse / map zoom in/out
var onMapMouseleaveHandler = function (event) {
  var that = $(this);

  that.on("click", onMapClickHandler);
  that.off("mouseleave", onMapMouseleaveHandler);
  that.find("iframe").css("pointer-events", "none");
};

var onMapClickHandler = function (event) {
  var that = $(this);

  // Disable the click handler until the user leaves the map area
  that.off("click", onMapClickHandler);

  // Enable scrolling zoom
  that.find("iframe").css("pointer-events", "auto");

  // Handle the mouse leave event
  that.on("mouseleave", onMapMouseleaveHandler);
};

// Enable map zooming with mouse scroll when the user clicks the map
$(".maps.embed-container").on("click", onMapClickHandler);



// Form index.html
const email = document.querySelector('#email');
const tel = document.querySelector('#tel');
const errEm = document.querySelector('.errEm');
const errTel = document.querySelector('.errTel');


const btnV = document.querySelector('.verdeBtn')
btnV.addEventListener('click', (e) => {
  e.preventDefault();


  if (email.value.trim() == '') {
    errEm.textContent = "Escriba el mail";
    errEm.style.color = "red";
    email.style.border = "2px solid red";
  } else {
    email.style.border = 'green 3px solid'
    errEm.textContent = "ok";
    errEm.style.color = "green";
  }

  if (tel.value.trim() == '') {
    errTel.textContent = "Escriba su #";
    errTel.style.color = "red";
    tel.style.border = "2px solid red";
  } else {
    tel.style.border = 'green 3px solid'
    errTel.textContent = "ok";
    errTel.style.color = "green";
  }

})

// CONTACTO

// const email2 = document.getElementById('email2');
// const tel2 = document.querySelector('#tel2');

// const btnC = document.querySelector('.btnC')
// btnC.addEventListener('click', (e) => {
//   e.preventDefault();

//   alert('h')
//   if (email2.value.trim() == '') {
//     errEm2.textContent = "Escriba el mail";
//     errEm2.style.color = "red";
//     email2.style.border = "2px solid red";
//   } else {
//     email2.style.border = 'green 3px solid'
//     errEm2.textContent = "ok";
//     errEm2.style.color = "green";
//   }

//   if (tel2.value.trim() == '') {
//     errTel2.textContent = "Escriba su #";
//     errTel2.style.color = "red";
//     tel2.style.border = "2px solid red";
//   } else {
//     tel2.style.border = 'green 3px solid'
//     errTel2.textContent = "ok";
//     errTel2.style.color = "green";
//   }

// })


