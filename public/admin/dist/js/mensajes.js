/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */

/* eslint-disable camelcase */

$(function () {
    // INICIA MENSAJES DE ESTADOS
    $('.guardando').click(function() {
      let timerInterval
      Swal.fire({
        html: 'Guardando Información',
        timerProgressBar: true,
        allowOutsideClick: false,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
      })
    });

    $('.actualizando').click(function() {
      let timerInterval
      Swal.fire({
        html: 'Actualizando Información',
        timerProgressBar: true,
        allowOutsideClick: false,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
      })
    });

    $('.borrando').click(function() {
      let timerInterval
      Swal.fire({
        html: 'Eliminando Información',
        timerProgressBar: true,
        allowOutsideClick: false,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
      })
    });
    // FIN MENSAJES DE ESTADOS
})
