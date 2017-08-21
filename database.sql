DROP DATABASE IF EXISTS Proyecto;

CREATE DATABASE IF NOT EXISTS Proyecto CHARSET utf8 COLLATE utf8_spanish2_ci;

USE Proyecto;

CREATE TABLE usuarios (
	nombre VARCHAR (255) NOT NULL,
	email VARCHAR (255) NOT NULL,
    contrasenya VARCHAR (45) NOT NULL
);

