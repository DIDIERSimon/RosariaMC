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

create table IF NOT EXISTS shop_product(
    `ProductID` INT(11) AUTO_INCREMENT not null,
    `ProductType` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `ProductName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `ProductPrice` INT(11) not null,
    primary key (`ProductID`)
);

create table IF NOT EXISTS players(
    `PlayerID` int AUTO_INCREMENT not null,
    `PlayerName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `PlayerUUID` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `Coins` FLOAT(10,2) DEFAULT 1,
    `GradeID` INT(11) DEFAULT 0,
    foreign key (`GradeID`) REFERENCES grades (`GradeID`),
    primary key (`PlayerID`)
);

create table IF NOT EXISTS account(
    `accountID` INT(11) AUTO_INCREMENT not null,
    `accountName` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE not null,
    `accountEmail` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE,
    `accountRole` INT(11) DEFAULT 1,
    `accountPassword` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountCreateAt` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountPB` INT(11) DEFAULT 0,
    foreign key (`accountRole`) REFERENCES roles(`RoleID`),
    primary key (`accountID`)
);

create table IF NOT EXISTS forum(
    `forumTopicID` INT(11) AUTO_INCREMENT,
    `forumTopicName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `forumTopicContent` TEXT COLLATE utf8_unicode_ci not null,
    `forumTopicAuthor` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `forumCategorie` INT(11) COLLATE utf8_unicode_ci not null,
    `forumTopicDate` DATE NOT NULL,
    foreign key (`forumTopicAuthor`) REFERENCES account(`accountName`),
    foreign key (`forumCategorie`) REFERENCES forum_categorie(`categorieID`),
    primary key (`forumTopicID`)
);


/* Insertion de données */

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

/*Liste shop*/
/*Grades*/
insert into shop_product (ProductType, ProductName, ProductPrice) values ('grade', 'Meiji', '500');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('grade', 'Taisho', '1000');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('grade', 'Showa', '1500');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('grade', 'Heisei', '2000');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('grade', 'Reiwa', '2500');
/*Faction*/
insert into shop_product (ProductType, ProductName, ProductPrice) values ('faction', '/near', '2000');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('faction', '/feed', '2000');

/*Hub*/
insert into shop_product (ProductType, ProductName, ProductPrice) values ('hub', '/fly', '3000');
insert into shop_product (ProductType, ProductName, ProductPrice) values ('hub', '/nick', '3000');



/*Insertion joueurs (vrai)*/
insert into players (PlayerName, PlayerUUID, Coins, GradeID) values ('Ekyazed', '9236c894-dbc6-4b63-9dcf-695d0a15a7f6', 0.00, 10);
insert into players (PlayerName, PlayerUUID, Coins, GradeID) values ('NiKla0Ss', 'e73c0d0c-c610-4b28-856b-0a09f987e6d3', 0.00, 10);

