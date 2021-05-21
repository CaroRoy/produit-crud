<?php

function enregistrerFichierEnvoye(array $infoFichier): string
{
    // On stocke l'heure courante en seconde mesurée depuis le 1/01/1970, en format string
    $timestamp = strval(time());
    // On stocke l'extension du fichier (qu'on récupère en découpant le chemin indiqué pour l'upload et en ne prenant que la dernière extension)
    $extension = pathinfo(basename($infoFichier["name"]), PATHINFO_EXTENSION);
    // On stocke le nom du fichier qui est la concaténation du mot "produit_" + l'heure courant "$timestamp" + un point + l'$extension
    $nomDuFichier = 'produit_' . $timestamp . '.' . $extension;
    // On stocke le chemin vers le répertoire "uploads"
    $dossierStockage = __DIR__ . '/uploads/';

    // Si le répertoire "uploads" n'existe pas
    if (file_exists($dossierStockage) === false)
    {
        // alors on le crée
        mkdir($dossierStockage);
    }

    // On déplace le fichier uploadé vers le répertoire "uploads" et à l'emplacement du nom $nomDuFichier
    move_uploaded_file($infoFichier["tmp_name"], $dossierStockage . $nomDuFichier);
    // On retourne le résultat : répertoire/nom du fichier
    return '/uploads/' . $nomDuFichier;
}

function onVaRediriger(string $path)
{
    // On redirige vers l'url http://router.php/'chemin "$path" indiqué en paramètre d'entrée de la fonction'
    header('LOCATION: /CoursPHP/php_web/produit-crud/router.php' . $path);
    // On stop le programme
    die();
}