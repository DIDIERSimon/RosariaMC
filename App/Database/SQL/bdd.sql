create database minecraft;
use minecraft;


/*  Creation des tables */

create table IF NOT EXISTS players(
    `PlayerName` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `PlayerUUID` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `Coins` FLOAT(10,2) DEFAULT 0,
    `Grade` INT(11) DEFAULT 0,
    primary key (`PlayerName`)
);

create table IF NOT EXISTS account(
    `accountID` INT(11) AUTO_INCREMENT not null,
    `accountName` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE not null,
    `accountEmail` VARCHAR(255) COLLATE utf8_unicode_ci UNIQUE not null,
    `accountPassword` VARCHAR(255) COLLATE utf8_unicode_ci not null,
    `accountPB` INT(11) DEFAULT 0,
    foreign KEY (`AccountName`) REFERENCES players(`PlayerName`),
    primary key (`accountID`)
);


/* Insertion de données */
INSERT INTO players (PlayerName, PlayerUUID) VALUES ('Ekyazed', 'unUUID');
INSERT INTO players (PlayerName, PlayerUUID) VALUES ('NiKla0Ss', 'unUUID2');