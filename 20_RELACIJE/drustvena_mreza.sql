-- Kreiranje baze drustvena mreza
CREATE DATABASE drustvena_mreza;

-- Kreianje tabele KORISNICI
CREATE TABLE korisnici(
	id INT PRIMARY KEY,
    korisnicko_ime VARCHAR(45),
    lozinka VARCHAR(45)
);

-- Kreiranje tabele PROFILI
CREATE TABLE profili(
	id INT PRIMARY KEY,
    adresa VARCHAR(255),
    telefon VARCHAR(40),
    korisnik_id INT UNIQUE
);

-- Povezivanje tabela KORISNICI I PROFILI, 1:1 vezom
ALTER TABLE profili -- koju tabelu dopunjujemo
ADD FOREIGN KEY(korisnik_id) -- koje polje u toj tabeli postavljamo da bude strani kljuc
REFERENCES korisnici(id); -- povezujemo to polje sa kojom tabelom i kojim njenim poljem tj. tabela1(polje u tabeli1)

-- Unos podataka u tabelu KORISNICI
INSERT INTO `korisnici`(`id`, `korisnicko_ime`, `lozinka`) 
VALUES 
(1, 'ana_antic', '123456'),
(2, 'bojan_bojovic', '123456'),
(3, 'vuk_vulic', '123456');

-- Unos podataka u tabelu PROFILI
INSERT INTO `profili`(`id`, `adresa`, `telefon`, `korisnik_id`) 
VALUES 
(101, 'Strahinjica Bana 45b','123456', 2);

INSERT INTO `profili`(`id`, `adresa`, `telefon`, `korisnik_id`) 
VALUES 
(102, 'Romanijska 45a','123456', 1);

-- Ovo ne radi jar smo vec imali strani kljuc 1, a strani kljuc u vezi 1-1 mora biti UNIQUE
INSERT INTO `profili`(`id`, `adresa`, `telefon`, `korisnik_id`) 
VALUES 
(103, 'Zetska 1','123456', 1);

-- Kreiranje tabele OBJAVE
CREATE TABLE objave(
    id INT PRIMARY KEY,
    naslov_objave VARCHAR(255)
);

-- Kreiranje tabele KOMENTARI
CREATE TABLE komentari(
    id INT PRIMARY KEY,
    tekst_komentara VARCHAR(255),
    objave_id INT,
    FOREIGN KEY(objave_id) REFERENCES objave(id) -- Strani kljuc objave_id povezujemo sa primarnim kljucem iz tabele objave
);

-- Unos podataka u tabelu OBJAVE
INSERT INTO `objave`(`id`, `naslov_objave`) 
VALUES 
(1, 'Nole nasmejao publiku'),
(2, 'Jokic tripl dabl'),
(3, 'Bogdanovic solidan');

-- Unos podataka u tabelu KOMENTARI
INSERT INTO `komentari`(`id`, `tekst_komentara`, `objave_id`) 
VALUES 
(1, 'Svaka cast majstore!', 2),
(2, 'Nedovoljno za pobedu...', 2),
(3, 'Trojka sa druge planete!', 3),
(4, 'Ne mogu da prestanem da se smejem!', 1),
(5, 'Jokic smrsao', 2);

-- Kreiranje tabele KATEGORIJE
CREATE TABLE kategorije(
    id INT PRIMARY KEY,
    naziv VARCHAR(255) NOT NULL
);

-- Unos podataka u tabelu KATEGORIJE
INSERT INTO `kategorije`(`id`, `naziv`) 
VALUES 
(1, 'Politika'),
(2, 'Kultura'),
(3, 'Hronika'),
(4, 'Zabava'),
(5, 'Sport'),
(6, 'Vreme'),
(7, 'Zdravlje');

-- Kreiranje tabele KATEGORIJE_HAS_OBJAVE (MEDJUTABELA) - Povezivanje tabela KATEGORIJE I OBJAVE vezom N:M
CREATE TABLE kategorije_has_objave(
    kategorije_id INT,
    objave_id INT,
    FOREIGN KEY(kategorije_id) REFERENCES kategorije(id),
    FOREIGN KEY(objave_id) REFERENCES objave(id)
); 

-- Unos podataka u tabelu u MEDJUTABELU
INSERT INTO `kategorije_has_objave`(`kategorije_id`, `objave_id`) 
VALUES 
(4, 1),
(5, 1),
(5, 2),
(5, 3);