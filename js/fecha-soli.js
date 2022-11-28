
// selecciona el campo de fecha de solicitud
const dateInput = document.getElementById('fechaSolicitud');
//Se leasigna el valor de formato fecha
dateInput.value = formatDate();
//para verificar valores
console.log(formatDate());
//se le da formato de 2 digitos
function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}
//se asigna el formato que obtendra la fecha del input
function formatDate(date = new Date()) {
  return [
    date.getFullYear(),
    padTo2Digits(date.getMonth() + 1),
    padTo2Digits(date.getDate()),
  ].join('-');
}