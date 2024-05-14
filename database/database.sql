DROP DATABASE IF EXISTS `Home`;

CREATE DATABASE `Home`;

USE `Home`;

CREATE TABLE
    `Role` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Admin` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `RoleId` INT NOT NULL,
        `Username` VARCHAR(255) NOT NULL,
        `Password` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`RoleId`) REFERENCES `Role` (`Id`)
    );

CREATE TABLE
    `State` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Branch` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `StateId` INT NOT NULL,
        FOREIGN KEY (`StateId`) REFERENCES `State` (`Id`)
    );

CREATE TABLE
    `City` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL,
        `StateId` INT NOT NULL,
        `BranchId` INT NOT NULL,
         FOREIGN KEY (`StateId`) REFERENCES `State` (`Id`),
          FOREIGN KEY (`BranchId`) REFERENCES `Branch` (`Id`)
    );

CREATE TABLE
    `Agent` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `BranchId` INT NOT NULL,
        `Name` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Phone` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `Password` VARCHAR(255) NOT NULL,
        `License` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`BranchId`) REFERENCES `Branch` (`Id`)
    );

CREATE TABLE
    `Client` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Phone` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `PropertyOwner` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Phone` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Property` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `CityId` INT NOT NULL,
        `PropertyOwnerId` INT NOT NULL,
        `StateId` INT NOT NULL,
        `Type` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `Price` INT NOT NULL,
        `SquareFeet` VARCHAR(255) NOT NULL,
        `ImageFileName` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`CityId`) REFERENCES `City` (`Id`),
        FOREIGN KEY (`PropertyOwnerId`) REFERENCES `PropertyOwner` (`Id`),
        FOREIGN KEY (`StateId`) REFERENCES `State` (`Id`)
    );

CREATE TABLE
    `Contact` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Phone` INT NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `ClientId` INT NOT NULL,
        `PropertyOwnerId` INT NOT NULL,
        `AgentId` INT NOT NULL,
        FOREIGN KEY (`ClientId`) REFERENCES `Client` (`Id`),
        FOREIGN KEY (`AgentId`) REFERENCES `Agent` (`Id`),
        FOREIGN KEY (`PropertyOwnerId`) REFERENCES `PropertyOwner` (`Id`)
    );

CREATE TABLE
    `Feedback` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Rating` INT NOT NULL,
        `ClientId` INT NOT NULL,
        `AgentId` INT NOT NULL,
        FOREIGN KEY (`ClientId`) REFERENCES `Client` (`Id`),
        FOREIGN KEY (`AgentId`) REFERENCES `Agent` (`Id`)
    );

CREATE TABLE
    `Appointment` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `ClientId` INT NOT NULL,
        `AgentId` INT NOT NULL,
        `PropertyId` INT NOT NULL,
        `Date` DATE NOT NULL,
        `Time` TIME NOT NULL,
        FOREIGN KEY (`ClientId`) REFERENCES `Client` (`Id`),
        FOREIGN KEY (`AgentId`) REFERENCES `Agent` (`Id`),
        FOREIGN KEY (`PropertyId`) REFERENCES `Property` (`Id`)
    );