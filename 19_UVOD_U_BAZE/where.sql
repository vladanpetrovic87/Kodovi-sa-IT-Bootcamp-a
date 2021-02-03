--Iz tabele customers, pročitati sve klijente koji dolaze iz Srbije:
SELECT * 
FROM `customers` 
WHERE `state`="Srbija"; 

--Iz tabele customers, pročitati sve klijente koji imaju platu jednaku (manju, veću) od 500.
SELECT * 
FROM `customers` 
WHERE `salary`=500;

--Iz tabele tasks, pročitati sve zadatke ciji je status aktivan:
SELECT `title`
FROM `tasks` 
WHERE `status`=1;


--Iz tabele tasks, pročitati sve zadatke ciji je prioritet nizak:
SELECT *
FROM `tasks` 
WHERE `priority`=0;


--Iz tabele customers, pročitati sve klijente kojima je ime Bojana:
SELECT * 
FROM `customers` 
WHERE `name`="Bojana";

--Iz tabele customers, pročitati sve klijente koji imaju platu jednaku (manju, veću) od 500.
SELECT `id`, `name`, `salary`
FROM `customers` 
WHERE `salary`<500;

--Iz tabele customers, pročitati sve klijente cija je plata izmeĎu 300 i 800,
SELECT * 
FROM `customers` 
WHERE `salary` BETWEEN 300 AND 800;

--Iz tabele customers, pročitati sve klijente cije je ime Ana, Bojana ili Vuk
SELECT `id`, `name` 
FROM `customers` 
WHERE `name` IN ("Ana", "Bojana", "Vuk");


--Iz tabele customers, pročitati sve klijente koji su iz Srbije, Rumunije ili Bugarske,
SELECT `name` 
FROM `customers` 
WHERE `state` IN ("Srbija", "Rumunija", "Bugarska");


--Iz tabele customers, pročitati sve klijente cija adresa pocinje na slovo B:
SELECT `id`, `name`, `address` 
FROM `customers` 
WHERE `address`LIKE "B%";

--Iz tabele customers, pročitati sve klijente cija adresa sadrzi slovo B:
SELECT `id`, `name`, `address` 
FROM `customers` 
WHERE `address`LIKE "%B%";

--Iz tabele customers, pročitati sve klijente cija adresa se zavrsava na slovo B:
SELECT `id`, `name`, `address` 
FROM `customers` 
WHERE `address`LIKE "%B";

--Iz tabele customers, pročitati sve klijente koji potiču iz zemlje koja počinje na slovo “S”.
SELECT `name` 
FROM `customers` 
WHERE `state` LIKE "S%";


--Iz tabele tasks, pročitati sve zadatke ciji id pripada skupu {1, 2},
SELECT * 
FROM `tasks` 
WHERE `task_id` IN (1,2);

--Iz tabele tasks, pročitati sve zadatke ciji je početak veći od 2019-01-01.
SELECT * 
FROM `tasks` 
WHERE `start_date`>"2019-01-01";


--Iz tabele tasks, pročitati sve zadatke ciji je status različit od neaktivan.
SELECT * 
FROM `tasks` 
WHERE `status` !=0;


--Selektovati tri aktivna korisnika
SELECT * 
FROM `customers` 
WHERE `active`=1
LIMIT 3;--Limit sluzi da prikaze odredjeni broj redova

--Selektuje kupce imaju ime Bojana koja ima vise od 25 godina i ima platu vise od 300:
SELECT * 
FROM `customers` 
WHERE `name`="Bojana" AND `age`>25 AND `salary`>300;

--Selektuje kupce koji nisu aktivni
SELECT * 
FROM `customers` 
WHERE `active` !=1; 

SELECT * 
FROM `customers` 
WHERE `active` <>1;

SELECT * 
FROM `customers` 
WHERE NOT `active`=1;

--Selektovati sve kupce koji su iz Srbije i nisu aktivni
SELECT * 
FROM `customers` 
WHERE `state`="Srbija" AND NOT `active`=1;

--Iz tabele customers, pročitati sve klijente:
--1)Koji su iz Srbije a plata je 600,
SELECT * 
FROM `customers` 
WHERE `state`="Srbija" AND `salary`=600;

--2) Čije ime počinje na S ili imaju manje od 30god.
SELECT * 
FROM `customers`
WHERE `name` LIKE "S%" OR `age`<30;

--Iz tabele tasks, pročitati sve zadatke:
--1) Čiji je status različit od aktivan i prioritet visok,
SELECT * 
FROM `tasks` 
WHERE `status` !=1 AND `priority`>0;

--Čiji datum  veći od 2019-01-01.
SELECT * 
FROM `tasks` 
WHERE `start_date`>"2019-01-01";

--Selektovati id, ime i broj godina iz tabele customers, U RASTUCEM REDOSLEDU po godinama
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `age`;

--Selektovati id, ime i broj godina iz tabele customers, U OPADAJUCEM REDOSLEDU po godinama
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `age` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu rastuce
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name` ASC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu opadajuce
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu rastuce,a onda opadajuce po id
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name`, `id` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu rastuce,a onda opadajuce po godinama
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name`, `age` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu opadajuce,ako je ime isto a onda sortirati opadajuce po godinama(prioritet onda imaju prilikom prikazivanjaimaju osobe koje su starije)
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name` DESC, `age` DESC;


--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke po imenu opadajuce,ako je ime isto a onda sortirati rastuce po godinama
SELECT `id`, `name`, `age` 
FROM `customers` 
ORDER BY `name` DESC, `age` ASC;

--Selektovati id, ime i broj kupca koji je imao najvise kupovina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`
ORDER BY `number_of_visits` DESC
LIMIT 1;

--Selektovati id, ime i broj kupca koji je imao najvise kupovina i ima ispod 25 godina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`
WHERE `age`<25
ORDER BY `number_of_visits` DESC
LIMIT 1;

--Selektovati najmanji broj iz kolone age, tj selektovati najmanji broj godina iz tabele customers
SELECT MIN(age)
FROM `customers`

--Nazivamo kolonu MIN($age) nekim drugim imenom
SELECT MIN(age) AS "Najmanji broj godina"
FROM `customers` 

--Selektovati id, ime i broj godina najmladje osobe iz tabele customers
SELECT `id`, `name`, `address`, MIN(`age`) AS "Najmanji broj godina"
FROM `customers` 

--Selektovati id, ime i broj godina najmladje osobe iz tabele customers koja se zove Bojana
SELECT id, name, address, MIN(age) AS "Najmanji broj godina"
FROM `customers` 
WHERE `name` LIKE "Bojana";

--Prebrojati kupce izmedju 25 i 50 godina
SELECT COUNT(`age`) AS "Broj kupaca izmedju 25 i 50 godina"
FROM `customers` 
WHERE `age` BETWEEN 25 AND 50;

--Prosecna starost svih kupaca
SELECT AVG(`age`) AS "Prosecna starost svih kupaca"
FROM `customers`; 

--Ukupan broj poseta
SELECT SUM(`number_of_visits`) AS "Ukupan broj poseta"
FROM `customers`; 

--Broj razlicitih imena kupaca
SELECT COUNT(DISTINCT `name`) AS "Broj razliitih imena"
FROM `customers`; 

--Prosecna starost kupaca izmedju 25 i 50 godina
SELECT AVG(`age`) AS "Prosecna starost kupaca izmedju 25 i 50 godina"
FROM `customers`
WHERE `age`>=25 AND `age`<=50;

--Mozemo i da delimo sumu i broj godina
SELECT SUM(`age`)/COUNT(`age`)
FROM `customers`

--Dodatak
SELECT `name` AS "Porodica", SUM(`salary`) AS "Suma plata po porodici"
FROM `customers`
GROUP by `name`

--U tabeli customers odrediti:
--1) Broj radnika
SELECT COUNT(`id`)
FROM `customers`
--2) Minimalnu platu
SELECT `name` AS "Ime radnika", MIN(`salary`) AS "Minimalna plata radnika"
FROM `customers`
--3) Maksimalnu platu
SELECT `name` AS "Ime radnika", MAX(`salary`) AS "Najveca plata radnika"
FROM `customers`
--4) Ukupnu platu
SELECT SUM(`salary`) AS "Ukupna plata radnika"
FROM `customers`
--5) Prosečnu platu
SELECT AVG(`salary`) AS "Prosecna plata radnika"
FROM `customers`


--Prosecna plata radnika izmedju 25 i 45 radnika
SELECT AVG(`salary`) AS "Prosecna plata radnika"
FROM `customers`
WHERE `age` BETWEEN 25 AND 45;