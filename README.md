Projet de Recherche de Stages


1. Sujet du projet
Nous avons pour objectif de créer une application web destinée à faciliter la recherche de stages en entreprise pour les étudiants. Ce site permettra de centraliser les offres de stage, d'enregistrer les informations des entreprises, et d'offrir une interface adaptée aux différents profils d'utilisateurs : administrateurs, pilotes de promotion, et étudiants.



2. Énoncé
Les étudiants trouvent souvent difficile de gérer leur recherche de stage : activer leurs réseaux, chercher des offres sur diverses plateformes, etc. Ce projet vise à simplifier cette étape en centralisant toutes les informations et en offrant des outils de gestion et de filtrage efficaces. Le site sera conçu pour être simple à utiliser, mais aussi performant, afin que chacun des utilisateurs puisse accomplir ses tâches rapidement et efficacement.



3. Exercice
Le projet est divisé en plusieurs étapes :

    1- Composition des groupes et planification : Nous avons défini les rôles de chacun, choisi les méthodes de travail et planifié l'organisation du projet.

    2- Maquettage et Frontend : Nous avons réalisé les premières maquettes du site, puis nous avons développé le frontend avec HTML, CSS et JavaScript pour garantir une interface fonctionnelle et esthétique.

    3- Modélisation de la base de données : Nous avons conçu le modèle de données pour gérer efficacement les utilisateurs, les entreprises, les offres de stage, etc.

    4- Développement Backend : Enfin, nous avons implémenté la logique serveur avec PHP, en utilisant un moteur de template pour séparer le code de présentation et la logique métier.



4. Présentation détaillée du projet
    
        4.1 Objectif
Le but de ce projet est de développer une plateforme permettant aux étudiants de trouver des offres de stage correspondant à leurs compétences, tout en offrant aux entreprises un moyen de publier leurs offres et d'évaluer les stagiaires. Chaque profil utilisateur (étudiant, pilote de promotion, administrateur) aura des permissions spécifiques qui lui permettront d'accéder à certaines fonctionnalités du site.

        4.2 Fonctionnalités principales
Gestion des utilisateurs : Nous avons mis en place des systèmes d'authentification et de gestion des comptes pour les étudiants, les pilotes de promotion et les administrateurs.
Gestion des entreprises : Les utilisateurs peuvent rechercher, ajouter, modifier, et supprimer des entreprises, ainsi que les évaluer.
Gestion des offres de stage : Nous avons intégré des fonctionnalités permettant aux utilisateurs de rechercher, créer, modifier, supprimer et consulter les offres de stage. Ces offres peuvent être filtrées par compétences, entreprise, ou d'autres critères.
Gestion des candidatures : Les étudiants peuvent ajouter des offres à leur liste de souhaits, postuler à des offres de stage en envoyant une lettre de motivation et un CV, et consulter les statistiques de leurs candidatures.

        4.3 Cahier des charges
Le site devait répondre à plusieurs spécifications techniques, dont la mise en place d'une architecture MVC, la validation des formulaires côté front et back, ainsi qu'une gestion de la base de données relationnelle. Nous avons également pris en compte des exigences de responsive design pour que le site soit utilisable sur tous types d'appareils (PC, tablettes, smartphones).

        4.4 Spécifications fonctionnelles
Nous avons développé plusieurs fonctionnalités selon des spécifications précises :
    - Gestion des rôles : Chaque type d'utilisateur a accès à des fonctionnalités spécifiques. Par exemple, seuls les administrateurs peuvent supprimer des comptes ou des entreprises.
    - Gestion des offres et des candidatures : Les étudiants peuvent consulter les offres, les ajouter à leur liste de souhaits et postuler, tandis que les administrateurs peuvent gérer les offres et suivre les candidatures.
    - Statistiques : Nous avons ajouté des dashboards pour permettre aux administrateurs et aux pilotes de promotion de suivre les tendances des offres et des candidatures.

        4.5 Spécifications techniques
Architecture MVC : Nous avons utilisé l'architecture Model-View-Controller (MVC) pour séparer la logique métier, la présentation et les données.
Validation des formulaires : Nous avons mis en place des mécanismes de validation des champs de formulaire, à la fois côté client (JavaScript) et côté serveur (PHP), pour garantir la sécurité et l'intégrité des données.
Sécurité : Nous avons sécurisé les informations de connexion avec des cookies et utilisé des pratiques pour prévenir les attaques par injection SQL.
Base de données : Nous avons utilisé MySQL pour gérer les utilisateurs, les entreprises, les offres de stage et les candidatures. Les relations entre les différentes entités ont été définies avec des clés étrangères pour garantir la cohérence des données.

        4.6 Technologies utilisées
Frontend : HTML5, CSS3, JavaScript
Backend : PHP (avec un moteur de template pour séparer logique et présentation)
Base de données : MySQL
Sécurité : Protection contre les injections SQL, gestion sécurisée des mots de passe et des cookies
Responsive Design : Utilisation de media queries pour rendre le site adaptatif sur différents appareils.

        4.7 Bonus - PWA (Progressive Web App)
Une fois le site fonctionnel, nous avons exploré la possibilité de le transformer en une application mobile avec une installation via PWA. Cela permet au site de fonctionner comme une application native, avec une icône sur l'écran d'accueil, la possibilité de fonctionner hors ligne, et une expérience utilisateur plus fluide.




5. Livrables
Maquettes : Réalisées à l'aide de Figma pour l'interface utilisateur.
Code source : Le code du projet est hébergé sur GitHub, accessible pour tout suivi et révision.
Soutenance : Le projet se termine par une soutenance où nous avons présenté le site au jury, en expliquant nos choix techniques et montrant une démonstration des fonctionnalités.





6. Conclusion
Ce projet a été une excellente occasion d'appliquer nos connaissances en développement web dans un projet concret. Nous avons dû travailler en équipe pour gérer les différentes étapes du développement, de la conception à la mise en production, tout en respectant les spécifications fonctionnelles et techniques imposées. Cela nous a permis de mieux comprendre l'importance de la gestion de projet, de la collaboration, et des bonnes pratiques de développement.