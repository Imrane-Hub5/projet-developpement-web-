CREATE DATABASE IF NOT EXISTS easystage;
USE easystage;

-- Utilisateurs (étudiants & entreprises)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    telephone VARCHAR(20),
    mot_de_passe VARCHAR(255),
    role ENUM('candidat', 'entreprise') NOT NULL,
    domaine VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Offres de stage/alternance
CREATE TABLE offres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_entreprise INT,
    titre VARCHAR(150),
    description TEXT,
    localisation VARCHAR(100),
    type ENUM('Stage', 'Alternance'),
    duree VARCHAR(50),
    mode ENUM('Présentiel', 'Distanciel', 'Hybride'),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_entreprise) REFERENCES utilisateurs(id)
);

-- Candidatures
CREATE TABLE candidatures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    id_offre INT,
    date_candidature TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('en attente', 'acceptée', 'refusée') DEFAULT 'en attente',
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id),
    FOREIGN KEY (id_offre) REFERENCES offres(id)
);

-- Script de peuplement automatique

INSERT INTO entreprises (id, nom, email, domaine) VALUES (1, 'Lopez SARL', 'claude24@meunier.fr', 'Art');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (2, 'Lacroix Hubert SA', 'georgesgrenier@hoareau.fr', 'Musique');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (3, 'Vincent', 'dupreines@martel.com', 'BTP');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (4, 'Caron SARL', 'edouardmoulin@richard.fr', 'Support Technique');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (5, 'Salmon Vidal S.A.R.L.', 'oceaneevrard@lelievre.fr', 'Éducation');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (6, 'Hebert', 'renaultfrederic@lopez.com', 'Blockchain');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (7, 'Dubois Delaunay S.A.R.L.', 'tlenoir@masse.org', 'Agriculture');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (8, 'Briand Barbier SARL', 'barbealexandria@bernier.com', 'Cloud');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (9, 'Michaud Gonzalez et Fils', 'jacquotchantal@bouvier.fr', 'Événementiel');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (10, 'Gaillard', 'guichardmadeleine@leclercq.org', 'Gestion de projet');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (11, 'Duval SA', 'josette50@carre.com', 'Événementiel');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (12, 'Lecomte S.A.S.', 'boulaythierry@courtois.com', 'Data / IA');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (13, 'Royer Clément S.A.S.', 'thibaultsophie@lambert.com', 'Sport');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (14, 'Morin', 'alain54@charrier.net', 'Éducation');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (15, 'Hamel', 'wpages@boutin.fr', 'Média');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (16, 'Traore', 'gaudinsusan@laurent.fr', 'DevOps');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (17, 'Charpentier S.A.', 'maggiebarthelemy@toussaint.net', 'Support Technique');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (18, 'Bazin Guibert S.A.', 'constanceblondel@pons.com', 'Ingénierie');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (19, 'Charpentier', 'laurence60@dupuis.net', 'Restauration');
INSERT INTO entreprises (id, nom, email, domaine) VALUES (20, 'Brunet S.A.S.', 'zpereira@meunier.com', 'Logistique');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (1, 'Didier', 'Étienne', 'jean42@hotmail.fr', 25, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (2, 'Guyot', 'Hortense', 'emmanuel12@tele2.fr', 18, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (3, 'Poirier', 'Christelle', 'idelahaye@yahoo.fr', 22, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (4, 'Colas', 'Claire', 'sebastien66@besnard.fr', 20, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (5, 'Besson', 'Émile', 'rcharles@gmail.com', 25, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (6, 'Legendre', 'Lucy', 'martineguilbert@meyer.org', 22, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (7, 'Mallet', 'Hugues', 'hubertamelie@tele2.fr', 22, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (8, 'Laroche', 'Éric', 'pbigot@tele2.fr', 22, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (9, 'Nicolas', 'Émile', 'chauvinpauline@bourgeois.fr', 24, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (10, 'Boulanger', 'Christophe', 'josette73@tiscali.fr', 19, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (11, 'Noël', 'Roger', 'morvanhonore@tiscali.fr', 24, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (12, 'Rodrigues', 'Lucie', 'helene09@bonnet.fr', 23, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (13, 'Perret', 'Christelle', 'lecomtealphonse@dupuy.org', 22, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (14, 'Bousquet', 'Joseph', 'danielparis@faure.org', 18, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (15, 'Mendès', 'Catherine', 'margueritepoirier@free.fr', 22, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (16, 'Vincent', 'Éric', 'odette42@sfr.fr', 18, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (17, 'Lévêque', 'Astrid', 'sregnier@free.fr', 25, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (18, 'Grenier', 'Bernadette', 'jdubois@sfr.fr', 21, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (19, 'Garnier', 'Monique', 'margot50@albert.fr', 23, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (20, 'Noël', 'Sophie', 'dorothee07@laposte.net', 21, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (21, 'Couturier', 'Catherine', 'carpentiernoemi@de.com', 22, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (22, 'Brunel', 'Alexandria', 'marc39@lemaitre.com', 19, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (23, 'Hernandez', 'Thibault', 'ddelahaye@bouchet.fr', 22, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (24, 'Benard', 'Véronique', 'gabriel27@noos.fr', 18, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (25, 'Besson', 'Joseph', 'sweber@couturier.org', 23, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (26, 'Boutin', 'Laure', 'duvalemmanuel@chauvet.com', 19, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (27, 'Mahe', 'Océane', 'lgaudin@martineau.fr', 23, 'Bac+3');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (28, 'Lecomte', 'Maurice', 'mnoel@tiscali.fr', 20, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (29, 'Denis', 'Adèle', 'timbert@ifrance.com', 20, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (30, 'Robert', 'Alix', 'rene44@maillet.net', 23, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (31, 'Thomas', 'Arnaude', 'michelhonore@paul.fr', 26, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (32, 'Daniel', 'Jean', 'frederiquemichaud@sfr.fr', 20, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (33, 'Chauvet', 'Lucy', 'verdieraurelie@laposte.net', 25, 'Bac+2');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (34, 'Bousquet', 'Amélie', 'hprevost@nguyen.com', 23, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (35, 'Bodin', 'Georges', 'virginie82@dbmail.com', 25, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (36, 'Martins', 'Éric', 'nguyenalain@leroy.com', 20, 'Bac+1');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (37, 'Masse', 'Alex', 'cecilecouturier@lemoine.net', 24, 'Master');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (38, 'Guibert', 'Matthieu', 'elisemoulin@ifrance.com', 23, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (39, 'Pires', 'Raymond', 'emile20@masson.com', 24, 'Bac');
INSERT INTO etudiants (id, nom, prenom, email, age, niveau) VALUES (40, 'Gautier', 'Guy', 'jules11@tiscali.fr', 22, 'Master');
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (1, 'hôtesse de l''air', 'Développement', 'Michaud', '2 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (2, 'bottier', 'Développement', 'Simonnec', '4 mois', 'Hybride', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (3, 'assistant en études de prix', 'Développement', 'ToussaintBourg', '4 mois', 'Présentiel', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (4, 'conseiller en génétique', 'Développement', 'Malletboeuf', '5 mois', 'Présentiel', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (5, 'sapeur-pompier', 'Développement', 'Renard-les-Bains', '6 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (6, 'ergonome', 'Marketing', 'Saint Margaux', '3 mois', 'Hybride', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (7, 'professeur de collège et de lycée', 'Marketing', 'David-sur-Lemaire', '5 mois', 'Hybride', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (8, 'géologue minier', 'Marketing', 'Guillet', '5 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (9, 'responsable du recrutement', 'Marketing', 'Morvan-sur-Thomas', '2 mois', 'Présentiel', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (10, 'chef de projet éolien', 'Marketing', 'Traore-la-Forêt', '5 mois', 'Présentiel', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (11, 'chargé d''études ressources humaines', 'Design', 'Seguin', '3 mois', 'Hybride', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (12, 'agent de sécurité', 'Design', 'Simon-les-Bains', '5 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (13, 'conseiller principal d''éducation principale d''éducation', 'Design', 'Noël', '6 mois', 'Télétravail', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (14, 'conseiller pénitentiaire d''insertion et de probation', 'Design', 'Sainte Guillaume', '3 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (15, 'conservateur territorial de bibliothèques', 'Design', 'Saint René-la-Forêt', '5 mois', 'Hybride', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (16, 'matelot de la Marine Nationale', 'Ressources Humaines', 'Morin', '4 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (17, 'géotechnicien', 'Ressources Humaines', 'Gilles-la-Forêt', '3 mois', 'Télétravail', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (18, 'libraire', 'Ressources Humaines', 'Nguyennec', '3 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (19, 'conducteur d''engins forestiers de récolte en entreprises de travaux forestiers', 'Ressources Humaines', 'Giraud', '4 mois', 'Hybride', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (20, 'conducteur de machines à imprimer', 'Ressources Humaines', 'Carlier', '2 mois', 'Télétravail', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (21, 'boulanger', 'Finance', 'Gosselin-sur-Coste', '3 mois', 'Présentiel', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (22, 'femme de chambre', 'Finance', 'Leclerc', '2 mois', 'Hybride', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (23, 'veilleur stratégique', 'Finance', 'Lesagedan', '6 mois', 'Présentiel', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (24, 'ingénieur papetier papetière', 'Finance', 'Letellier-sur-Maillard', '4 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (25, 'formulateur', 'Finance', 'Nicolas-sur-Seguin', '6 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (26, 'ingénieur de maintenance industrielle', 'Data / IA', 'Bourgeoisboeuf', '6 mois', 'Présentiel', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (27, 'ingénieur calcul', 'Data / IA', 'Sainte JacquesVille', '3 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (28, 'mécatronicien', 'Data / IA', 'Coste', '3 mois', 'Hybride', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (29, 'ingénieur frigoriste', 'Data / IA', 'Texier', '4 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (30, 'serrurier dépanneur dépanneuse', 'Data / IA', 'Benardnec', '6 mois', 'Télétravail', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (31, 'agent de sécurité', 'Communication', 'Saint Suzanneboeuf', '2 mois', 'Hybride', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (32, 'ingénieur production en mécanique', 'Communication', 'Pelletier', '3 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (33, 'couvreur', 'Communication', 'Saint Margauxboeuf', '3 mois', 'Hybride', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (34, 'ingénieur biomédical biomédicale', 'Communication', 'Valette', '2 mois', 'Présentiel', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (35, 'fiscaliste', 'Communication', 'Saint TimothéeVille', '2 mois', 'Présentiel', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (36, 'traducteur technique', 'UX/UI', 'Benoit', '6 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (37, 'juriste en propriété intellectuelle', 'UX/UI', 'Lebrun-sur-Rey', '5 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (38, 'plâtrier', 'UX/UI', 'Sainte Roland-sur-Mer', '6 mois', 'Hybride', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (39, 'officier de la Marine nationale', 'UX/UI', 'Henry', '5 mois', 'Hybride', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (40, 'plombier', 'UX/UI', 'Auger', '6 mois', 'Présentiel', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (41, 'responsable de scierie', 'IT', 'Sainte Maggienec', '4 mois', 'Télétravail', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (42, 'formateur technique en agroéquipement', 'IT', 'Philippe', '2 mois', 'Télétravail', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (43, 'conducteur de machines agricoles', 'IT', 'Sainte Colette', '5 mois', 'Hybride', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (44, 'animateur 2D et 3D', 'IT', 'De Oliveira', '5 mois', 'Hybride', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (45, 'chargé d''études média', 'IT', 'Sainte Jeanboeuf', '2 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (46, 'responsable approvisionnement', 'Support Technique', 'GomezVille', '6 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (47, 'développeur économique', 'Support Technique', 'Saint Célina', '3 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (48, 'développeur économique', 'Support Technique', 'Antoine', '6 mois', 'Hybride', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (49, 'agronome', 'Support Technique', 'EvrardVille', '5 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (50, 'guide-conférencier', 'Support Technique', 'Saint Charlotte', '4 mois', 'Télétravail', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (51, 'bijoutier-joaillier', 'Gestion de projet', 'Ramos-la-Forêt', '6 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (52, 'domoticien', 'Gestion de projet', 'Chrétien', '2 mois', 'Hybride', 18);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (53, 'géomètre-topographe', 'Gestion de projet', 'Chevalierboeuf', '3 mois', 'Télétravail', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (54, 'miroitier', 'Gestion de projet', 'Rousseau-sur-Carlier', '3 mois', 'Télétravail', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (55, 'ergonome', 'Gestion de projet', 'TeixeiraBourg', '5 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (56, 'ingénieur calcul', 'Événementiel', 'Henry-sur-Leroy', '2 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (57, 'consultant SaaS', 'Événementiel', 'Saint Guillaume', '4 mois', 'Hybride', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (58, 'brodeur', 'Événementiel', 'Lagarde', '4 mois', 'Présentiel', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (59, 'vendeur en animalerie', 'Événementiel', 'Jean-les-Bains', '2 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (60, 'auxiliaire spécialisé vétérinaire', 'Événementiel', 'Ramos', '2 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (61, 'ingénieur analogicien analogicienne', 'Commerce', 'ThomasVille', '4 mois', 'Présentiel', 18);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (62, 'dessinateur-projeteur', 'Commerce', 'Saint Benoît', '2 mois', 'Hybride', 18);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (63, 'expert en assurances', 'Commerce', 'Sainte Vincentnec', '6 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (64, 'directeur de magasin à grande surface', 'Commerce', 'Dos Santos', '5 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (65, 'puériculteur', 'Commerce', 'Mathieu-les-Bains', '2 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (66, 'formulateur', 'Juridique', 'Chrétien', '4 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (67, 'pâtissier', 'Juridique', 'Diazdan', '6 mois', 'Hybride', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (68, 'tailleur de pierre', 'Juridique', 'Saint Hortensedan', '3 mois', 'Hybride', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (69, 'statisticien en géomarketing', 'Juridique', 'Guyotboeuf', '3 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (70, 'viticulteur', 'Juridique', 'JeanBourg', '6 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (71, 'directeur d''hôpital', 'Ingénierie', 'Mendès', '4 mois', 'Hybride', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (72, 'audioprothésiste', 'Ingénierie', 'Pascal', '5 mois', 'Hybride', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (73, 'correcteur', 'Ingénierie', 'Lemonnier', '6 mois', 'Hybride', 18);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (74, 'attaché commercial commerciale', 'Ingénierie', 'Sainte Charles-sur-Mer', '2 mois', 'Hybride', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (75, 'administrateur de mission humanitaire', 'Ingénierie', 'Bigot', '2 mois', 'Présentiel', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (76, 'ingénieur de recherche clinique et épidémiologique', 'Éducation', 'Coulon', '4 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (77, 'brodeur', 'Éducation', 'Guillaume', '2 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (78, 'responsable achats en chimie', 'Éducation', 'Buissonboeuf', '6 mois', 'Hybride', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (79, 'étanchéiste', 'Éducation', 'Neveu', '2 mois', 'Présentiel', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (80, 'inspecteur du permis de conduire et de la sécurité routière', 'Éducation', 'Bodin', '2 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (81, 'bronzier', 'Logistique', 'Vasseur', '3 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (82, 'illustrateur', 'Logistique', 'Sauvage-sur-Mer', '5 mois', 'Télétravail', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (83, 'ingénieur en métrologie', 'Logistique', 'Muller', '4 mois', 'Télétravail', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (84, 'décorateur', 'Logistique', 'Gaillard-la-Forêt', '6 mois', 'Hybride', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (85, 'préparateur en pharmacie', 'Logistique', 'Saint CélinaBourg', '2 mois', 'Présentiel', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (86, 'écrivain', 'Production', 'Saint Alfreddan', '6 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (87, 'concepteur de jeux vidéo', 'Production', 'Leroy', '4 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (88, 'maquilleur artistique', 'Production', 'Sauvageboeuf', '5 mois', 'Hybride', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (89, 'directeur d''hôtel', 'Production', 'Saint Adriennenec', '5 mois', 'Télétravail', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (90, 'conseiller en séjour', 'Production', 'Chauvin', '6 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (91, 'monteur-câbleur', 'Qualité', 'Grégoireboeuf', '5 mois', 'Présentiel', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (92, 'antiquaire', 'Qualité', 'Maillardboeuf', '6 mois', 'Télétravail', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (93, 'biologiste médical', 'Qualité', 'Sainte Nath', '4 mois', 'Présentiel', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (94, 'ingénieur opticien opticienne', 'Qualité', 'Cousin', '5 mois', 'Hybride', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (95, 'concepteur designer packaging', 'Qualité', 'Schmitt-la-Forêt', '2 mois', 'Présentiel', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (96, 'officier marinier marinière', 'Sécurité', 'Teixeira-sur-Paul', '3 mois', 'Présentiel', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (97, 'ingénieur recherche et développement (R&amp;D) en agroéquipement', 'Sécurité', 'Saint Madeleine-sur-Mer', '4 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (98, 'carrossier', 'Sécurité', 'Noël', '2 mois', 'Télétravail', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (99, 'antiquaire', 'Sécurité', 'Sainte Olivier', '3 mois', 'Présentiel', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (100, 'artiste de cirque', 'Sécurité', 'Roussel-la-Forêt', '6 mois', 'Hybride', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (101, 'consultant en informatique décisionnelle', 'Santé', 'Bonnin-sur-Auger', '6 mois', 'Hybride', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (102, 'ingénieur environnement et risques industriels', 'Santé', 'CarlierBourg', '2 mois', 'Télétravail', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (103, 'conservateur territorial de bibliothèques', 'Santé', 'Costa', '5 mois', 'Présentiel', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (104, 'conseiller agricole', 'Santé', 'Martins', '2 mois', 'Télétravail', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (105, 'géophysicien', 'Santé', 'Munoz', '5 mois', 'Hybride', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (106, 'responsable de formation', 'Environnement', 'Peron', '5 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (107, 'accompagnateur de tourisme équestre', 'Environnement', 'Saint Constancedan', '5 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (108, 'zoologiste', 'Environnement', 'Lagarde', '3 mois', 'Hybride', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (109, 'convoyeur de fonds', 'Environnement', 'Gomes', '4 mois', 'Présentiel', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (110, 'technicien de fabrication de mobilier et de menuiserie', 'Environnement', 'Saint Julienboeuf', '2 mois', 'Présentiel', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (111, 'inséminateur', 'Art', 'Richard', '6 mois', 'Télétravail', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (112, 'syndic de copropriété', 'Art', 'Gilbertboeuf', '2 mois', 'Télétravail', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (113, 'agent artistique', 'Art', 'Aubry', '4 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (114, 'astrophysicien', 'Art', 'Potier', '3 mois', 'Présentiel', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (115, 'étanchéiste', 'Art', 'Sainte Christelle', '2 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (116, 'puériculteur', 'Musique', 'Sainte Paul', '3 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (117, 'manager de risques', 'Musique', 'Saint ThérèseVille', '3 mois', 'Présentiel', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (118, 'professeur de collège et de lycée', 'Musique', 'Dumas', '3 mois', 'Télétravail', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (119, 'officier de l''armée de l''air', 'Musique', 'Brun-les-Bains', '3 mois', 'Hybride', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (120, 'bibliothécaire', 'Musique', 'Sainte Suzanneboeuf', '2 mois', 'Présentiel', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (121, 'inspecteur des douanes, des finances publiques ou du travail', 'Sport', 'Guyonboeuf', '5 mois', 'Hybride', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (122, 'ouvrier paysagiste', 'Sport', 'Dupré', '5 mois', 'Hybride', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (123, 'maître-chien', 'Sport', 'Marchal', '6 mois', 'Télétravail', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (124, 'journaliste reporter d''images', 'Sport', 'Sainte Thibaut', '3 mois', 'Télétravail', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (125, 'technicien électrotechnicien électrotechnicienne', 'Sport', 'Paul', '5 mois', 'Télétravail', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (126, 'styliste', 'Mode', 'Guillet-sur-Marie', '4 mois', 'Hybride', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (127, 'directeur de magasin à grande surface', 'Mode', 'PetitjeanVille', '4 mois', 'Hybride', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (128, 'chef de mission humanitaire', 'Mode', 'Vasseur-les-Bains', '4 mois', 'Télétravail', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (129, 'huissier de justice', 'Mode', 'Martinez-sur-Mer', '2 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (130, 'préparateur en pharmacie', 'Mode', 'Alves-sur-Mer', '4 mois', 'Présentiel', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (131, 'écrivain', 'Agriculture', 'Saint AlexandriaBourg', '6 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (132, 'documentaliste', 'Agriculture', 'Lebreton-les-Bains', '5 mois', 'Télétravail', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (133, 'directeur d''hôtel', 'Agriculture', 'Rémy', '6 mois', 'Hybride', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (134, 'ingénieur en aéronautique', 'Agriculture', 'Delattre-sur-Baron', '5 mois', 'Hybride', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (135, 'facteur d''instruments', 'Agriculture', 'Dupont', '4 mois', 'Hybride', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (136, 'psychologue', 'BTP', 'Boutinboeuf', '6 mois', 'Présentiel', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (137, 'responsable du back office', 'BTP', 'Sainte Stéphaniedan', '5 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (138, 'professeur de collège et de lycée', 'BTP', 'Hervé', '2 mois', 'Hybride', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (139, 'carreleur', 'BTP', 'Sainte Marianne', '2 mois', 'Présentiel', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (140, 'chef de fabrication des industries graphiques', 'BTP', 'Bazin-les-Bains', '5 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (141, 'oenologue', 'Transport', 'Ferrand', '6 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (142, 'pilote de ligne', 'Transport', 'Bailly', '4 mois', 'Télétravail', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (143, 'maître-chien', 'Transport', 'François', '5 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (144, 'enseignant spécialisé spécialisée', 'Transport', 'Sainte Augustin', '2 mois', 'Hybride', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (145, 'conseiller pénitentiaire d''insertion et de probation', 'Transport', 'Allain', '2 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (146, 'chargé de clientèle banque', 'Restauration', 'Sainte Thibault', '6 mois', 'Hybride', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (147, 'accompagnateur en moyenne montagne', 'Restauration', 'BenardVille', '4 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (148, 'animateur du patrimoine', 'Restauration', 'Dos Santos', '3 mois', 'Télétravail', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (149, 'gérant de portefeuille', 'Restauration', 'Gaudin', '6 mois', 'Hybride', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (150, 'surveillant de centre pénitentiaire', 'Restauration', 'MeyerBourg', '4 mois', 'Télétravail', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (151, 'testeur', 'Tourisme', 'Meunier', '3 mois', 'Hybride', 3);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (152, 'volcanologue', 'Tourisme', 'Lesage', '4 mois', 'Hybride', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (153, 'pédiatre', 'Tourisme', 'Sainte MatthieuVille', '4 mois', 'Présentiel', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (154, 'mandataire judiciaire', 'Tourisme', 'Menard', '2 mois', 'Hybride', 14);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (155, 'technicien d''exploitation du réseau gaz', 'Tourisme', 'Briandnec', '6 mois', 'Télétravail', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (156, 'biologiste médical', 'Média', 'Hernandez', '4 mois', 'Télétravail', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (157, 'responsable de la collecte des déchets ménagers', 'Média', 'Giraud', '3 mois', 'Télétravail', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (158, 'poissonnier', 'Média', 'Potierboeuf', '3 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (159, 'psychanalyste', 'Média', 'Normand', '3 mois', 'Présentiel', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (160, 'conducteur de train', 'Média', 'Dufour', '2 mois', 'Hybride', 18);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (161, 'ingénieur maintenance aéronautique', 'Jeux Vidéo', 'Bourgeois-la-Forêt', '6 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (162, 'expert en sécurité informatique', 'Jeux Vidéo', 'Sainte Hélènedan', '6 mois', 'Présentiel', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (163, 'ouvrier paysagiste', 'Jeux Vidéo', 'Mallet', '5 mois', 'Présentiel', 6);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (164, 'ingénieur support', 'Jeux Vidéo', 'Saint Édithdan', '3 mois', 'Hybride', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (165, 'technicien en métrologie', 'Jeux Vidéo', 'Gaudin', '3 mois', 'Hybride', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (166, 'technicien de maintenance en génie climatique', 'Blockchain', 'Bigot', '2 mois', 'Télétravail', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (167, 'horloger', 'Blockchain', 'Turpinnec', '3 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (168, 'ingénieur gaz', 'Blockchain', 'LeroyVille', '4 mois', 'Hybride', 15);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (169, 'ingénieur nucléaire', 'Blockchain', 'Saint Laetitia-la-Forêt', '3 mois', 'Hybride', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (170, 'correcteur', 'Blockchain', 'Blanchet-sur-Besson', '4 mois', 'Télétravail', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (171, 'chargé de projet événementiel', 'Cybersécurité', 'Devaux-sur-Moreno', '4 mois', 'Hybride', 19);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (172, 'enseignant humanitaire', 'Cybersécurité', 'Sainte Gilbert', '5 mois', 'Télétravail', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (173, 'ingénieur en énergie solaire', 'Cybersécurité', 'Sainte Susan', '5 mois', 'Hybride', 17);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (174, 'météorologiste', 'Cybersécurité', 'VincentBourg', '5 mois', 'Présentiel', 7);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (175, 'aquaculteur', 'Cybersécurité', 'Delahaye', '6 mois', 'Présentiel', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (176, 'cadreur', 'Réseaux', 'Valentin', '2 mois', 'Hybride', 16);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (177, 'biologiste en environnement', 'Réseaux', 'Moreno', '4 mois', 'Hybride', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (178, 'matelot de la Marine Nationale', 'Réseaux', 'Bonnet', '6 mois', 'Présentiel', 10);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (179, 'chargé d''études ressources humaines', 'Réseaux', 'Parent-sur-Gros', '2 mois', 'Présentiel', 9);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (180, 'ébéniste', 'Réseaux', 'Saint Diane', '5 mois', 'Hybride', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (181, 'chef de chantier', 'Cloud', 'Traoredan', '5 mois', 'Présentiel', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (182, 'charpentier bois', 'Cloud', 'Parent', '5 mois', 'Télétravail', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (183, 'secrétaire de rédaction', 'Cloud', 'Hernandez', '5 mois', 'Présentiel', 13);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (184, 'régisseur général générale cinéma', 'Cloud', 'Fouquet', '6 mois', 'Télétravail', 8);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (185, 'acheteur', 'Cloud', 'Ferrand-sur-Mer', '5 mois', 'Présentiel', 12);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (186, 'chargé de recherche en recrutement', 'DevOps', 'Saint HonoréBourg', '3 mois', 'Présentiel', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (187, 'nivoculteur', 'DevOps', 'Saint LucasBourg', '2 mois', 'Hybride', 11);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (188, 'manipulateur en électroradiologie médicale', 'DevOps', 'Sainte Anaïs', '3 mois', 'Présentiel', 2);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (189, 'aquaculteur', 'DevOps', 'Sainte Annedan', '4 mois', 'Télétravail', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (190, 'community manager', 'DevOps', 'Morvan', '5 mois', 'Télétravail', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (191, 'diagnostiqueur immobilier', 'Robotique', 'Bazin-sur-Navarro', '2 mois', 'Présentiel', 1);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (192, 'spécialiste des affaires réglementaires en chimie', 'Robotique', 'Denis-sur-Lesage', '4 mois', 'Présentiel', 5);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (193, 'chef de cultures légumières', 'Robotique', 'Saint Guy', '6 mois', 'Hybride', 20);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (194, 'écrivain', 'Robotique', 'Picard', '6 mois', 'Télétravail', 4);
INSERT INTO offres (id, titre, domaine, localisation, duree, mode, id_entreprise)
VALUES (195, 'mécatronicien', 'Robotique', 'Bourgeoisdan', '4 mois', 'Présentiel', 10);