-- Kreiranje baze BIBLIOTEKA
CREATE DATABASE biblioteka;

-- Kreiranje tabele CLANOVI
CREATE TABLE clanovi(
	id INT PRIMARY KEY,
    ime VARCHAR(45),
    prezime VARCHAR(45),
    adresa VARCHAR(255),
    telefon VARCHAR(45)
);

-- Kreiranje tabele KNJIGE
CREATE TABLE knjige(
	id INT PRIMARY KEY,
    naziv VARCHAR(45),
    pisac VARCHAR(45)
);

-- Kreiranje tabele ZANR
CREATE TABLE zanr(
	id INT PRIMARY KEY,
    naziv VARCHAR(45)
);

-- Kreiranje tabele ZADUZENJE
CREATE TABLE zaduzenje(
	id INT PRIMARY KEY,
    datum DATE,
    vratio TINYINT(1),
    clanovi_id INT,
    knjige_id INT,
    FOREIGN KEY(clanovi_id) REFERENCES clanovi(id),
    FOREIGN KEY(knjige_id) REFERENCES knjige(id)
);

-- Kreiranje tabele KNJIGE_HAS_ZANR
CREATE TABLE knjige_has_zanr(
	knjige_id INT,
    zanr_id INT,
    FOREIGN KEY(knjige_id) REFERENCES knjige(id),
    FOREIGN KEY(zanr_id) REFERENCES zanr(id)
);

-- Kreiranje tabele PISAC
CREATE TABLE pisac(
	id INT PRIMARY KEY,
    ime VARCHAR(45),
    prezime VARCHAR(45),
    bio TEXT,
    god_rodj YEAR
);

-- Kreiranje tabele KNJIGE_HAS_PISAC
CREATE TABLE knjige_has_pisac(
    knjige_id INT,
    pisac_id INT,
    FOREIGN KEY(knjige_id) REFERENCES knjige(id),
    FOREIGN KEY(pisac_id) REFERENCES pisac(id)
);

-- Unos podataka u tabelu CLANOVI
INSERT INTO `clanovi`(`id`, `ime`, `prezime`, `adresa`, `telefon`) 
VALUES 
(1, "Petar", "Petrovic", "Dubrovacka 23", "456789"),
(2, "Lazar", "Lazic", "Hercegovacka 15", "123456");