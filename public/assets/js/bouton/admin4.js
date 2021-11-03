//la ligne suivante dit à jQuery d'attendre que la page soit complétement chargée
$(document).ready(function() {
    //si un clic est identifié sur le lien, on emploi la function suivante
    $("a#lien4").click(function() {
        $("#admin4").toggle(500); //500 est le nombre de millisecondes (soit 0.5 secondes) pour afficher ou cacher la div
        return false; //comme c'est un lien, on lui indique de ne rien retourner
    });
});