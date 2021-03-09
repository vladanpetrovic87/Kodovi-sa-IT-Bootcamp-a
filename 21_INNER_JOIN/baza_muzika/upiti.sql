-- 1. Izlistati sve nazive kompozicije i imena kompozitora koji su ih komponovali.
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id;

-- 2. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija.
SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;

-- 2.a. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija i poredjati ih od najduze ka ajkracoj kompoziciji
SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC;

-- 3. Izlistati sve kompozicije i njihove kompozitore, tako da su kompozicije nastale između 1700. i 1800. godine.
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
WHERE kompozicije.god BETWEEN 1700 AND 1800;

-- 5. Izlistati sve instrumente koji u svom opisu sadrže reč „udaraljke“ ili „duvački“.
SELECT `naziv`
FROM `instrumenti` 
WHERE `opis`='udaraljke' OR `opis`='duvački';
 
 -- ili

SELECT `naziv`
FROM `instrumenti` 
WHERE `opis` IN ('udaraljke', 'duvački');

-- 6. Izlistati sve instraumente koji u svom nazivu sadrže reč "viol
SELECT `naziv`
FROM `instrumenti` 
WHERE `naziv` LIKE '%viol%';

-- 7. Izlistati sve kompozicije koje pripadaju baroku ili romantizmu.
SELECT kompozicije.naziv, periodi.naziv
FROM kompozicije
INNER JOIN periodi
ON periodi.id = kompozicije.periodi_id 
WHERE periodi.naziv = 'barok' OR periodi.naziv = 'romantizam';

-- 8. Izlistati sve nazive kompozicija koje pripadaju baroknom stilu.
SELECT kompozicije.naziv, periodi.naziv
FROM kompozicije
INNER JOIN periodi
ON periodi.id = kompozicije.periodi_id 
WHERE periodi.naziv = 'barok';

-- 9. Izlistati sve kompozicije koje je komponovao Bethoven.
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozitori.prezime LIKE '%Bethoven%';

-- 10. Izlistati sve kompozitore koji su komponovali makar jednu od kompozicija iz tabele kompozicije
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozicije.naziv IS NOT NULL;

-- Alias za kolone
SELECT k.naziv AS "Naziv kompozicije", i.naziv AS "Instrument"
FROM kompozicije AS k
INNER JOIN kompozicije_has_instrumenti AS ki
ON k.id = ki.kompozicije_id
INNER JOIN instrumenti AS i
ON ki.instrumenti_id = i.id;


-- 11. Prikazati najdužu kompoziciju, dužinu njenog trajanja, kompozitora koji ju je komponovao i period kome pripada.
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id 
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC
LIMIT 1;

-- ILI (Ovaj nacin nije preporucljiv da stavljamo MAX u SELECT)
SELECT kompozicije.naziv, MAX(kompozicije.trajanje), kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id 
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;


-- Drugi nacin da prikazemo sve kompozicije ukoliko imamo vise kompozicija koje imaju najvece trajanje
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id 
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE kompozicije.trajanje = (SELECT MAX(kompozicije.trajanje) FROM kompozicije);


-- 11. Selektovati sve kompozitore čija su dela duža od 5 minuta i kraća od 25 minuta.
SELECT kompozitori.ime, kompozitori.prezime, kompozicije.naziv, kompozicije.trajanje
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
WHERE kompozicije.trajanje BETWEEN 300 AND 1500;

-- 12. Izlistati sve kompozitore čija dela pripadaju klasicizmu.
SELECT kompozitori.ime, kompozitori.prezime, kompozicije.naziv, periodi.naziv
FROM periodi
INNER JOIN kompozicije
ON periodi.id = kompozicije.periodi_id
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE periodi.naziv LIKE "klasicizam";

-- 13. Izlistati sve muzičke instrumente (bez ponavljanja) koji sviraju u kompozicijama klasicizma.
SELECT DISTINCT instrumenti.naziv, kompozicije.naziv, periodi.naziv
FROM instrumenti
INNER JOIN kompozicije_has_instrumenti
ON instrumenti.id = kompozicije_has_instrumenti.instrumenti_id
INNER JOIN kompozicije
ON kompozicije_has_instrumenti.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE periodi.naziv = "klasicizam";

-- 14. Prebrojati koliko ima muzičkih instrumenata koji sviraju u Betovenovim kompozicijama.
SELECT DISTINCT COUNT(instrumenti.id) AS "Broj instrumenata u Betovenovim kompozicijama"
FROM instrumenti
INNER JOIN kompozicije_has_instrumenti
ON instrumenti.id = kompozicije_has_instrumenti.instrumenti_id
INNER JOIN kompozicije
ON kompozicije.id = kompozicije_has_instrumenti.kompozicije_id
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
WHERE kompozitori.prezime LIKE "%Bethoven%";

-- 15. Prebrojati koliko kompozicija je komponovao kompozitor Ludvig van Betoven
SELECT COUNT(kompozitori.prezime) AS "Broj Betovenovih kompozicija"
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozitori.prezime LIKE "%bethoven%";

-- 16. Prebrojati koliko različitih instrumenata svira u unetim kompozicijama
SELECT DISTINCT COUNT(instrumenti.id) AS "Broj razlicitih instrumenata"
FROM instrumenti
INNER JOIN kompozicije_has_instrumenti
ON instrumenti.id = kompozicije_has_instrumenti.instrumenti_id
INNER JOIN kompozicije
ON kompozicije.id = kompozicije_has_instrumenti.kompozicije_id;







