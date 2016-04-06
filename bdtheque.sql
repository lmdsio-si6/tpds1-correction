create database if not exists bdtheque character set utf8 collate utf8_unicode_ci;
use bdtheque;

grant all privileges on bdtheque.* to 'bdtheque_util'@'localhost' identified by 'secret';

drop table if exists bd;
drop table if exists categorie;

CREATE TABLE categorie (
  id integer NOT NULL primary key auto_increment,
  libelle varchar(100) NOT NULL
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE bd (
  id integer NOT NULL primary key auto_increment,
  nom varchar(200) NOT NULL,
  auteur varchar(200) NOT NULL,
  nbAlbums integer NOT NULL,
  idCateg integer NOT NULL,
  CONSTRAINT fk_bd_categ FOREIGN KEY(idCateg) REFERENCES categorie(id)
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO categorie VALUES (1, "Fantasy");
INSERT INTO categorie VALUES (2, "Science-fiction");
INSERT INTO categorie VALUES (3, "Humour");

INSERT INTO bd VALUES (1, "La Quête de l'Oiseau du Temps", "Le Tendre", 3, 1);
INSERT INTO bd VALUES (2, "Joe Bar Team", "Debarre", 8, 3);
INSERT INTO bd VALUES (3, "De Cape et de Crocs", "Ayroles et Masbou", 11, 1);
INSERT INTO bd VALUES (4, "Lanfeust de Troy", "Arleston et Tarquin", 8, 1);
INSERT INTO bd VALUES (5, "L'Incal", "Jodorowsky et Moebius", 6, 2);
