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
    `accountEmail` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE not null,
    `accountRole` INT(11) DEFAULT 1,
    `accountPassword` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountCreateAt` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountPB` INT(11) DEFAULT 0,
    foreign key (`accountRole`) REFERENCES roles(`RoleID`),
    primary key (`accountID`)
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