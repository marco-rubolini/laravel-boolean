require('./bootstrap');

var $ = require('jquery');

import 'bootstrap';

$(document).ready(function() {
    // Intercetto il click sulla domanda
    $('.faq-singola').on('click', '.domanda', function() {
        // Se la domanda cliccata ha la classe attiva
        if ($(this).hasClass('active')) {
            // Rimuovi la classe attiva alle domande
            $('.domanda').removeClass('active');
            // Nascondi le risposte con animazione slideup
            $('.risposta').slideUp();
            // Sostituisci l'icona - con quella +
            $('.domanda').find('i').removeClass('fa-minus').addClass('fa-plus');
        }
        // Se la domanda non ha la classe attiva
            else {
            // Rimuovi la classe attiva a tutte le domande
            $('.domanda').removeClass('active');
            // Nascondi tutte le risposte con animazione slideup
            $('.risposta').slideUp();
            // Sostituisci l'icona con il segno - con il segno +
            $('.domanda').find('i').removeClass('fa-minus').addClass('fa-plus');
            // Aggiungi la classe attiva alla domanda cliccata
            $(this).addClass('active');
            // Sostituisci l'icona + con quella - alla domanda cliccata
            $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
            // Visualizza la risposta corrente con animazione slidedown
            $(this).next('.risposta').slideDown();
        }

    })
})
