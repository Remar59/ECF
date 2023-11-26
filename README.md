## 1
Créer le projet dans le bon dossier ("cd ...)
puis composer create-project laravel/laravel nomduprojet

## 2
Changer les variables de phpmyadmin (MyIsam en InnoDB)

## 3
Changer la db dans le fichier .env (la faire correspondre au nom du projet)

## 4
créer les migrations/modèles et factories

## 5
Modifier le seeder. Ajouter des colonnes à certaines tables si nécessaire (peut aussi se faire plus tard). Ne pas oublier le slug à cette étape.
De même, les relations many to one, ou many to many doivent se conçevoir à cette étape.

## 6
Préparer toutes les views. Essayer de préparer en même temps le routage.

## 7
Vérifier le fonctionnement des slugs, des routes, de la mise en page etc...