// automotor
const contentA = document.querySelector('#automotorTexto');
const flechaA = document.querySelector('.flechaAut');
const boton = document.querySelector('.boton');
const imgAut = document.querySelector('#automotorImg')

boton.addEventListener('click', (e) => {
    e.target.style.display = "none"
    contentA.classList.remove('d-none');
    imgAut.classList.add('overlay')
})
flechaA.addEventListener('click', () => {
    contentA.classList.add('d-none');
    boton.style.display = "block";
    imgAut.classList.remove('overlay')
})

// familia
const contentF = document.querySelector('#familiaTexto');
const flechaF = document.querySelector('.flechaFam');
const botonF = document.querySelector('.botonF');
const imgFam = document.querySelector('#familiaImg')

botonF.addEventListener('click', (e) => {
    e.target.style.display = "none"
    contentF.classList.remove('d-none');
    imgFam.classList.add('overlay')
})
flechaF.addEventListener('click', () => {
    contentF.classList.add('d-none');
    botonF.style.display = "block";
    imgFam.classList.remove('overlay')
})

// accidentes personales
const contentAcc = document.querySelector('#accidentesTexto');
const flechaAcc = document.querySelector('.flechaAcc');
const botonAcc = document.querySelector('.botonAcc');
const imgAcc = document.querySelector('#accidentesImg')

botonAcc.addEventListener('click', (e) => {
    e.target.style.display = "none"
    contentAcc.classList.remove('d-none');
    imgAcc.classList.add('overlay')
})
flechaAcc.addEventListener('click', () => {
    contentAcc.classList.add('d-none');
    botonAcc.style.display = "block";
    imgAcc.classList.remove('overlay')
})

// ahorro
const contentAho = document.querySelector('#ahorroTexto');
const flechaAho = document.querySelector('.flechaAho');
const botonAho = document.querySelector('.botonAho');
const imgAho = document.querySelector('#ahorroImg')

botonAho.addEventListener('click', (e) => {
    e.target.style.display = "none"
    contentAho.classList.remove('d-none');
    imgAho.classList.add('overlay')
})
flechaAho.addEventListener('click', () => {
    contentAho.classList.add('d-none');
    botonAho.style.display = "block";
    imgAho.classList.remove('overlay')
})


// ----------------- pop up --------------------
const popup = document.querySelector('.popup-wrapper');
const popx = document.querySelector('.popup-close');

document.querySelector('.btnAzul').addEventListener('click', () => {
    popup.style.display = "block"
})

popx.addEventListener('click', () => {
    popup.style.display = "none";
})

popup.addEventListener('click', () => {
    popup.style.display = "none";
})