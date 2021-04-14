drop database minecraft;
create database minecraft;
use minecraft;


/*  Creation des tables */

create table IF NOT EXISTS roles(
    `RoleID` INT(11) not null AUTO_INCREMENT,
    `RoleLibelle` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    primary key (`RoleID`)
);

create table IF NOT EXISTS grades(
    `GradeID` INT(11) not null AUTO_INCREMENT,
    `GradeLibelle` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    primary key (`GradeID`)
);

create table IF NOT EXISTS forum_categorie(
    `categorieID` INT(11) AUTO_INCREMENT,
    `categorieLibelle` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    primary key (`categorieID`)
);

create table IF NOT EXISTS players(
    `PlayerName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `PlayerUUID` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `Coins` FLOAT(10,2) DEFAULT 1,
    `GradeID` INT(11) DEFAULT 0,
    foreign key (`GradeID`) REFERENCES grades (`GradeID`),
    primary key (`PlayerName`)
);

create table IF NOT EXISTS account(
    `accountID` INT(11) AUTO_INCREMENT not null,
    `accountName` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE not null,
    `accountEmail` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE,
    `accountRole` INT(11) DEFAULT 1,
    `accountPassword` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountCreateAt` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountPB` INT(11) DEFAULT 0,
    foreign key (`accountName`) REFERENCES players(`PlayerName`),
    foreign key (`accountRole`) REFERENCES roles(`RoleID`),
    primary key (`accountID`)
);

create table IF NOT EXISTS forum(
    `forumTopicID` INT(11) AUTO_INCREMENT,
    `forumTopicName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `forumTopicContent` TEXT COLLATE utf8_unicode_ci not null,
    `forumTopicAuthor` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `forumCategorie` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    foreign key (`forumTopicAuthor`) REFERENCES account(`accountName`),
    foreign key (`forumCategorie`) REFERENCES forum_categorie(`categorieID`),
    primary key (`forumTopicID`)
);


/* Insertion de données */

/*Insertion joueurs (vrai)*/
insert into players values ('Ekyazed', '9236c894-dbc6-4b63-9dcf-695d0a15a7f6', 0.00, 10);
insert into players values ('NiKla0Ss', 'e73c0d0c-c610-4b28-856b-0a09f987e6d3', 0.00, 10);

/*Liste Roles*/
insert into roles (RoleLibelle) values ('Joueur');
insert into roles (RoleLibelle) values ('Modo_Joueur');
insert into roles (RoleLibelle) values ('Youtube');
insert into roles (RoleLibelle) values ('Modérateur');
insert into roles (RoleLibelle) values ('Community_Manager');
insert into roles (RoleLibelle) values ('Responsable_Moderéteur');
insert into roles (RoleLibelle) values ('Administrateur');
insert into roles (RoleLibelle) values ('Gérant');

/*Liste Grade*/
insert into grades (GradeLibelle) VALUES ('Joueur');
insert into grades (GradeLibelle) VALUES ('Modo_Joueur');
insert into grades (GradeLibelle) VALUES ('VIP');
insert into grades (GradeLibelle) VALUES ('Légendaire');
insert into grades (GradeLibelle) VALUES ('Youtube');
insert into grades (GradeLibelle) VALUES ('Friend');
insert into grades (GradeLibelle) VALUES ('Modérateur');
insert into grades (GradeLibelle) VALUES ('Responsable');
insert into grades (GradeLibelle) VALUES ('Administrateur');
insert into grades (GradeLibelle) VALUES ('Gérant');

/*Liste Catégorie*/
insert into forum_categorie (categorieLibelle) VALUES ('Recrutement_Staff');
insert into forum_categorie (categorieLibelle) VALUES ('Plaintes');
insert into forum_categorie (categorieLibelle) VALUES ('Sondage');
insert into forum_categorie (categorieLibelle) VALUES ("Demande_d'aide");