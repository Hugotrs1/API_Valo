API Valorant
Ce projet est une API pour le jeu Valorant, avec une application front-end qui permet d'afficher les informations des agents. L'application utilise XAMPP pour configurer un serveur local et une base de données MySQL.

Prérequis
XAMPP : Assurez-vous d'avoir XAMPP installé sur votre système. Si ce n'est pas le cas, vous pouvez le télécharger et l'installer depuis le site officiel de XAMPP.
Installation
Étape 1 : Configurer le serveur local
Démarrez XAMPP et activez les services Apache et MySQL.
Étape 2 : Placement des fichiers
Dans votre disque C:/, accédez au dossier xampp/htdocs/ et placez-y les fichiers du projet en suivant cette arborescence :

javascript
Copier le code
C:/xampp/htdocs/
└── API_Valo/
    ├── API/
    │   ├── [fichiers correspondants à l'API]
    ├── appli/
    │   ├── [fichiers correspondants à l'application front-end]
    └── images/
        ├── [fichiers correspondants aux images]
Remarque : Veuillez respecter les noms de dossiers mentionnés ci-dessus (API_Valo, API, appli, images).

Étape 3 : Configuration de la base de données
Ouvrez phpMyAdmin (généralement accessible à l'adresse http://localhost/phpmyadmin).
Créez une nouvelle base de données (par exemple : valorant_db).
Importez le fichier agents_valorant.sql dans la base de données que vous venez de créer :
Cliquez sur l'onglet Importer.
Sélectionnez le fichier agents_valorant.sql et cliquez sur Exécuter.
Lancement de l'application
Assurez-vous que les services Apache et MySQL sont en cours d'exécution dans XAMPP.
Accédez à l'application en ouvrant un navigateur et en allant à l'adresse http://localhost/API_Valo/appli/.
Structure du projet
Voici un aperçu des répertoires et fichiers principaux :

API_Valo/ : Répertoire racine du projet.
API/ : Contient les fichiers de l'API backend.
appli/ : Contient les fichiers front-end de l'application.
images/ : Contient les images utilisées par l'application.
agents_valorant.sql : Script SQL pour créer et remplir la base de données.

Aide supplémentaire
Si vous rencontrez des problèmes, vérifiez que :

Les services Apache et MySQL sont démarrés dans XAMPP.
Les fichiers sont correctement placés dans le dossier htdocs.
La base de données est correctement importée et accessible dans phpMyAdmin.
