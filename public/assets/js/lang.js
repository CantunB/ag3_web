function locale_translate(){
    var locale =  lenguaje();
            if (locale == 'es') {
                return [
                    'Confirmar tu reservacion', //0
                    'No podras cancelar el proceso!', //1
                    'Si, confirmar!', //2
                    'No, cancelar!',  //3
                    'Estamos haciendo un espacio para tu reserva...', //4
                    'Desea descargar el comprobante de reserva?', //5
                    'Su reservación se ha realizado correctamente', //6
                    'Descargar', //7
                    'Cancelar', //8
                    'Comprobante de Reserva', //9
                    'Descargando', //10
                    'Tu archivo estara listo en...  <b></b> milliseconds..', //11
                    'Volver al inicio',  //12
                    'Gracias por elegir AG3 Luxury Travel',  //13
                    'IR',  //14
                    'Volver',  //15
                    'Continua con tu reserva!',  //16
                    'Puedes volver elegir otro metodo de pago' //17
                ];
            }else if (locale == 'en') {
                return  [
                    'Confirm your reservation', //0
                    'You will not be able to cancel the process!', //1
                    'Yes, confirm!',
                    'No, cancel!',
                    'We are making a space for your reservation...',
                    'Do you want to download the reservation receipt?',
                    'Your reservation has been made successfully',
                    'Download',
                    'Cancel',
                    'Reservation Voucher',
                    'Downloading',
                    'Your file will be ready in... <b></b> milliseconds..',
                    'Back to home',
                    'Thank you for choosing AG3 Luxury Travel',
                    'GO',
                    'Return',
                    'Continue with your reservation!',
                    'You can return to choose another payment method'
                ];
            }else if (locale == 'fr') {
                return [
                    'Confirmer votre réservation',
                    'Ne pas annuler le processus !',
                    'Oui, confirmez !',
                    'Non, annulez !',
                    'Nous préparons une place pour votre réservation...',
                    'Voulez-vous télécharger le reçu de réservation ?',
                    'Votre réservation a été effectuée avec succès',
                    'Télécharger',
                    'Annuler',
                    'Bon de réservation',
                    'Téléchargement',
                    'Votre fichier sera prêt dans... <b></b> millisecondes..',
                    'Retour au début',
                    'Merci d´avoir choisi AG3 Luxury Travel',
                    'ALLER',
                    'Retourner',
                    'Continuez votre réservation!',
                    'Vous pouvez revenir pour choisir un autre mode de paiement'

                ];
            }
}
