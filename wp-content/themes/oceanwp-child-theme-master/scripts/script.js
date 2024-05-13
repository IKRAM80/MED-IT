jQuery(document).ready(function ($) {  // le code à l'intérieur de la fonction sera exécuté une fois que le document HTML est entièrement chargé
    $('.popup-close').click(function () { //sélectionner tous les éléments de classe "popup-close" et ajouter un événement de clic à chacun
        $(this).closest('.popup-salon').hide();//trouver l'élément parent le plus proche de l'élément cliqué qui a la classe "popup-salon" et le cacher en le rendant invisible.
        $('.popup-overlay').css('z-index', 'initial');//sélectionner tous les éléments de classe "popup-overlay" et modifier leur propriété CSS "z-index" pour la définir sur sa valeur initiale
     });
     });