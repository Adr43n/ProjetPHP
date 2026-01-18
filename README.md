# ⚽ GestionEquipe – Système de Gestion de Club de Football

> **Projet académique réalisé en binôme dans le cadre du BUT Informatique.**

L'application **GestionEquipe** est une solution web développée en PHP permettant aux entraîneurs de gérer leur effectif, préparer des feuilles de match dynamiques et analyser les performances de l’équipe via des statistiques détaillées.

---

## 👥 Équipe de Développement

Ce projet a été conçu et réalisé par :
- **Imam Magadiyev**
- **Adrien Basset**

---

## 🌐 Application en ligne

L’application est accessible à l’adresse suivante :  
👉 **https://projetequipedefoot.rf.gd**

> ⚠️ **Avertissement Google Chrome**  
> Google Chrome peut afficher un message du type *"Site dangereux"* en raison de l’hébergement gratuit (InfinityFree), qui partage parfois son adresse IP avec d’autres sites signalés.  
>
> ✔️ Le site fonctionne normalement  
> ✔️ Aucun contenu malveillant  
> ✔️ Testé et fonctionnel sur **Brave, Firefox et Edge**  
>
> En cas d’avertissement Chrome :  
> *Paramètres avancés → Continuer vers le site*

---

## 🔐 Authentification

Identifiants pour accéder à l’application :

- **Identifiant** : `admin`
- **Mot de passe** : `admin`

---

## 🚀 Fonctionnalités Clés

### 🏃 Gestion des Joueurs
- CRUD complet : ajout, modification, suppression et consultation
- Suivi physique : taille, poids et statut
- Historique des commentaires et évaluations

### 📅 Gestion des Matchs & Préparation
- Planification des matchs (adversaire, lieu, date, résultat)
- Feuille de match interactive (titulaires / remplaçants par poste)
- Règles métiers : 11 joueurs obligatoires avec 1 gardien

### 📊 Statistiques & Performances
- Tableau de bord global (victoires, nuls, défaites)
- Fiches individuelles par joueur

### 🔐 Sécurité & Interface
- Authentification par sessions PHP
- Interface moderne, sombre (Dark Mode) et responsive

---

## 🛠️ Stack Technique

| Technologie | Usage |
|------------|------|
| PHP 8+ | Logique métier |
| MySQL (PDO) | Base de données |
| Architecture MVC | Organisation du code |
| HTML / CSS | Interface utilisateur |
| Apache | Serveur web |

---

## 📂 Architecture du Projet

Structure principale du projet :

```text
GestionEquipe/
├── index.php             # Point d’entrée de l’application
├── ProjetFoot.sql        # Schéma de la base de données
├── modele/               # Classes métiers et DAO
├── controleur/           # Logique applicative
├── vue/                  # Vues HTML
├── connexion/            # Authentification et sessions
├── bd/                   # Connexion PDO
└── Assets/               # Ressources (logos, images)

---

# Installation et utilisation en local

## 1️⃣ Prérequis
Installer un serveur local :  
- **XAMPP** (recommandé)  
- WAMP ou MAMP  

> XAMPP inclut Apache, MySQL, PHP et phpMyAdmin.

## 2️⃣ Installation du projet
1. Installer et lancer **XAMPP**  
2. Démarrer **Apache** et **MySQL**  
3. Copier le dossier du projet dans :  
C:\xampp\htdocs\

**Exemple de dossier :**  

    projetEquipeFoot

## 3️⃣ Base de données (local)
1. Accéder à **phpMyAdmin** :  

http://localhost/phpmyadmin

2. Créer une base nommée :  

ProjetFoot

3. Importer le fichier `ProjetFoot.sql`  

**Identifiants MySQL par défaut :**  
- Utilisateur : `root`  
- Mot de passe : *(vide)*

## 4️⃣ Lancer l’application
Dans le navigateur :  

http://localhost/projetEquipeFoot/index.php


## 5️⃣ ⚠️ Problème courant : port Apache déjà utilisé
Si Apache ne démarre pas :  
1. Ouvrir XAMPP → Config → Apache (`httpd.conf`)  
2. Remplacer :  

Listen 80

par :

Listen 8080

3. Redémarrer Apache  

Nouvelle URL :  

http://localhost:8080/projetEquipeFoot/index.php


## 📌 Remarques
- Application fonctionnelle en ligne et en local  
- Architecture **MVC** respectée  
- Code source complet fourni conformément aux consignes

## 🔗 GitHub
- Mon profil : https://github.com/Adr43n  
- Profil de mon pote : https://github.com/ImamMagadiyev
