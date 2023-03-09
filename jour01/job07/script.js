function jourtravaille(jour, mois){
    if (typeof(jour) == "number"){
        console.log("Le type du jour doit être une chaîne de caractère (lundi , mardi, mercredi, jeudi, vendredi, samedi, dimanche");    
    }
    else if (typeof(mois) == "string"){
        console.log("Le type du mois doit être un entier entre 1 et 12")
    }
    else if (jour == "dimanche" || jour == "samedi") {
        console.log("Non", jour , mois + " 2020 est un week-end")
    }
    else if (jour > 31){
        console.log("Le jour ne doit pas être au dessus de 31");    
    }
    else if (jour > 29){
        console.log("Février s'arrête au 29 en 2020.");    
    }
    else if (jour > 30 && mois == "février" || jour > 30 && mois == "avril" || jour > 30 && mois == "juin" || jour > 30 && mois || jour > 30 && "septembre" || jour > 30 && mois == "novembre"){
        console.log("Il faut choisir un jour inférieur ou égal à 30");    
    }
}