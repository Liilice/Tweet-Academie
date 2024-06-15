# Tweet Académie

## Introduction
Tweet Académie est un réseau social destiné aux étudiants de la promotion, inspiré de Twitter. Il offre des fonctionnalités similaires à celles de Twitter, permettant aux utilisateurs de se connecter, de partager des tweets, de suivre d'autres utilisateurs, et bien plus encore.

## Fonctionnalités Principales
1. **Compte membre** : Création et gestion de comptes utilisateurs.
2. **Tweets** :
   - Ajout de hashtags (#).
   - Ciblage d'une personne suivie dans un tweet (@).
   - Réponse à un tweet.
   - Retweet.
3. **Recherche de tags** : Section de recherche pour les hashtags.
4. **Suivi des membres** : Suivre et se faire suivre par d'autres membres.
5. **Personnalisation du thème** : Choisir son thème light ou dark.
6. **Liste des followers et followings** : Afficher la liste des followers et des followings.
8. **Édition de profil** : Modifier les informations de son profil.
10. **Limitation des tweets** : Les tweets ne doivent pas dépasser 140 caractères.
11. **Sécurité des mots de passe** : Hachage des mots de passe au format `ripemd160` avec le salt commun "vive le projet tweet_academy".

## Prérequis
Assurez-vous d'avoir les outils suivants installés sur votre machine :
- PHP 7.4 ou plus récent
- MySQL
- Node.js et npm (pour la gestion des dépendances JavaScript)

## Installation
Clonez le répertoire du projet, installez les dépendances et configurez la base de données.

### 1. Cloner le Répertoire du Projet
```bash
git clone git@github.com:Liilice/Tweet-Academie.git
cd tweet_academie
```

### 2. Installer les Dépendances JavaScript
Utilisez npm pour installer les dépendances JavaScript du projet, notamment Tailwind CSS.
```bash
npm install tailwindcss
```

### 4. Compiler les Fichiers CSS avec Tailwind CSS
Compilez les fichiers CSS en utilisant Tailwind CSS.
```bash
npx tailwindcss -i ./front/css/package.css -o ./front/css/output.css --watch
```

### 5. Configurer la Base de Données
Créez une base de données MySQL et importez le fichier `twitter.sql` qui se trouve dans le dossier sql :
```sql
CREATE DATABASE tweet_academie;
USE tweet_academie;
SOURCE commondatabase.sql;
```

### 7. Lancer le Serveur de Développement
```php
php -S localhost:8000
```
