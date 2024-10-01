# Laravel / Symfony Refactoring Kata Test by KADAFI Ben to SAYNA

# Voici les processus que j’ai suivis pour la réalisation de ce test : 
Avant d’effectuer ce test, j’avais déjà installé PHP 8.1.26 et Composer version 2.7.9. 
Puisque j’utilise habituellement Symfony 6 ces derniers temps, 
j’ai donc dû adapter ce code à la version que j’utilise en installant les packages avec Composer (commande : composer install --ignore-platform reqs), 
avec cette commande, on peut ignorer les exigences des plateformes. 
Après cela, j’ai procédé à la complétion du code en commençant par l’ajout de namespaces pour chaque fichier puis, l’importation des sources use pour chaque fichier notamment dans l’Entity, Repository, 
Context, Helper et test. J’ai aussi fait un changement de package de fzaninotto/faker en fakerphp/faker puisque fzaninotto/faker n’est pas pris en compte en PHP 8.
Et pour finir, après avoir effectué les tests unitaires, j’ai ajouté des blocs de commentaires dans le fichier “TemplateManager.php” pour bien guider les autres développeurs suivants.
