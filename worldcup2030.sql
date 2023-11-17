CREATE DATABASE WorldCup2030 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE groupes (
    id_groupe int NOT NULL AUTO_INCREMENT,
    nom_groupe varchar(10) NOT NULL,
    stade varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE equipes (
    id_equipe int NOT NULL AUTO_INCREMENT,
    flag varchar(255) NOT NULL,
    nom varchar(100) NOT NULL,
    joueur varchar(100) NOT NULL,
    capitale varchar(100) NOT NULL,
    continent varchar(100) NOT NULL,
    pplation int NOT NULL,
    MatchsJoues int NOT NULL,
    Victoires int NOT NULL,
    Nuls int NOT NULL,
    Defaites int NOT NULL,
    ButsPour int NOT NULL,
    ButsContre int NOT NULL,
    Points int NOT NULL,
    id_groupe int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_groupe) REFERENCES groupes (id),



    INSERT INTO groupes  VALUES (NULL, "A", "complexe moulay abdellah");
    INSERT INTO groupes  VALUES (NULL, "B", "Grande stade Marrakech");
    INSERT INTO groupes  VALUES (NULL, "C", "grande stade Adrar Agadir");
    INSERT INTO groupes  VALUES (NULL, "D", "Grand stade de Tanger");
    INSERT INTO groupes  VALUES (NULL, "E", "Complexe sportif de Fès");
    INSERT INTO groupes  VALUES (NULL, "F", "Stade Mohammed-V");
    INSERT INTO groupes  VALUES (NULL, "G", "Stade Cheikh laghdaf laayoune");
    INSERT INTO groupes  VALUES (NULL, "H", "Stade de La Marche Verte Safi");


INSERT INTO equipes (flag, nom, joueur, capitale, continent, pplation, MatchsJoues, Victoires, Nuls, Defaites,Points,id_groupe)
VALUES 
('images/brasile.png', 'Brésil', 'Neymar Jr', 'Brasília', 'Amérique du Sud', 210000000, 0, 0, 0, 0, 0, 1),
('images/mexic.png', 'Mexique', 'Raúl Jiménez', 'Mexico', 'Amérique du Nord', 126000000, 0, 0, 0, 0, 0, 1),
('images/belgique.png', 'Belgique', 'Kevin De Bruyne', 'Bruxelles', 'Europe', 11500000, 0, 0, 0, 0, 0, 1),
('images/iran.png', 'Iran', 'Chi3a', 'Tahran', 'Asie', 90000000, 0, 0, 0, 0, 0, 1),
('images/portugal.png', 'Portugal', 'Cristiano Ronaldo', 'Lisbonne', 'Europe', 102000000, 0, 0, 0, 0, 0, 2),
('images/france.png', 'France', 'Kylian Mbappé', 'Paris', 'Europe', 67000000, 0, 0, 0, 0, 0, 2),
('imges/australie.png', 'Australie', 'Cahil', 'Canberra', 'Océanie', 26000000, 0, 0, 0, 0, 0, 0, 0, 0, 2),
('images/senegal.png', 'Sénégal', 'Sadio Mané', 'Dakar', 'Afrique', 17000000, 0, 0, 0, 0, 0, 2),
('images/italy.png', 'Italie', 'Ciro Immobile', 'Rome', 'Europe', 60000000, 0, 0, 0, 0, 0, 3),
('images/argentine.png', 'Argentine', 'Lionel Messi', 'Buenos Aires', 'Amérique du Sud', 44000000, 0, 0, 0, 0, 0, 3),
('images/ghana.png', 'Ghana', 'Party', 'ghana', 'Afrique', 90000000, 0, 0, 0, 0, 0, 3),
('images/canada.png', 'Canada', 'MCanadalah', 'Ottawa', 'Amerique du nord', 90000000, 0, 0, 0, 0, 0, 3),
('images/spania.png', 'Espagne', 'Sergio Ramos', 'Madrid', 'Europe', 47000000, 0, 0, 0, 0, 0, 4),
('images/holanda.png', 'Pays-Bas', 'Virgil van Dijk', 'Amsterdam', 'Europe', 17000000, 0, 0, 0, 0, 0, 4),
('images/almania.png', 'Allemagne', 'Leroy Sané', 'Berlin', 'Europe', 83000000, 0, 0, 0, 0, 0, 4),
('images/cameroune.png', 'Cameroune', 'Ikambi', 'caamm', 'Afrique', 90000000, 0, 0, 0, 0, 0, 4),
('images/mirican.png', 'États-Unis', 'Christian Pulisic', 'Washington, D.C.', 'Amérique du Nord', 331000000, 0, 0, 0, 0, 0, 5),
('images/croitie.png', 'Croatie', 'Luka Modrić', 'Zagreb', 'Europe', 4100000, 0, 0, 0, 0, 0, 5),
('images/russia.png', 'Russia', 'Kov', 'Moscow', 'Europe', 90000000, 0, 0, 0, 0, 0, 5),
('images/tunis.png', 'Tunisie', 'Ali Maalol', 'Tunis', 'Afrique', 90000000, 0, 0, 0, 0, 0, 5),
('images/ngliz.png', 'Angleterre', 'Harry Kane', 'Londres', 'Europe', 56000000, 0, 0, 0, 0, 0, 6),
('images/maroc.png', 'Maroc', 'Achraf Hakimi', 'Rabat', 'Afrique', 3600000, 0, 0, 0, 0, 0, 6),
('images/japon.png', 'Japon', 'Mitoma', 'Tokyo', 'Asie', 90000000, 0, 0, 0, 0, 0, 6),
('images/saudi.png', 'Saudi', 'Dawsari', 'Riyadh', 'Asie', 90000000, 0, 0, 0, 0, 0, 6),
('images/colombia.png', 'Colombie', 'James Rodríguez', 'Bogotá', 'Amérique du Sud', 51000000, 0, 0, 0, 0, 0, 7),
('images/corea.png', 'Corea', 'Son', 'Seoul', 'Asie', 90000000, 0, 0, 0, 0, 0, 7),
('images/swed.png', 'Sweeden', 'Zlatan', 'Stokholme', 'Europe', 90000000, 0, 0, 0, 0, 0, 7),
('images/chili.png', 'Chili', 'Bravo', 'Santiago', 'Amerique du sud', 90000000, 0, 0, 0, 0, 0, 7),
('images/misr.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8),
('images/misr.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8),
('images/newzeland.png', 'Newzeland', 'Mohammed Salah', 'town', 'Oceanique', 90000000, 0, 0, 0, 0, 0, 8),
('/images/pologne.png', 'Poland', 'Robert Lewandowski', 'Warsow', 'Europe', 90000000, 0, 0, 0, 0, 0, 8),
('images/urugway.png', 'Uruguay', 'Luis Suárez', 'Montevideo', 'Amérique du Sud', 3400000, 0, 0, 0, 0, 0, 8),
);