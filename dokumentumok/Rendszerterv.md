# Rendszerterv
## A Rendszer célja
A rendszer célja, hogy a Követelmény és Funkcionális specifikációban meghatározott megrendelői folyamatok megvalósuljanak. Egy olyan webshopot szeretnénk létrehozni, ami használhatóságban, megjelenésben és funkcióit tekintve,a megrendelőkívánságainak eleget tesz. A weboldalt bárki el fogja tudni érni és lehetősége lesz a vásárlásra bejelentkezés vagy regisztráció után. Fontosnak tartjuk, hogy a weboldal mindig naprakész legyen és lehetőség legyen a későbbiekben az oldal fejlesztésére, ha igény adódik rá. Az oldalunk célja egy olyan webshopot létrehozni ahol a vásárló könnyen eligazodik a menükben és nincsennek felesleges tartalmak. Célunk, hogy a megrendelőnek a vásárlások és a vásárlók száma termeljen profitot, ne pedig a reklámok.
## Projectterv

|Dátum               |Tevékenyésg           |Résztvevők|
|--------------------|----------------------|----------|
|2020.10.08-10.18| Dokumentációk megírása||
|2020.10.19|Fejlesztés megkezdése||

## Üzleti folyamatok modellje
Üzleti szereplõk:
	-Felhasználó
	-Admin

Támogatandó folyamatok leírása:
	-Vásárlás

Üzleti folyamatok leírása:

Vásárlás:
Az oldalon bejelentkezés után a felhasználó tudd rendelni a felkínált termékekből.

-Modell:
Termékek	-> Bejeletkezés -> Sikeres bejelentkezés
		-> Regisztráció
		-> Impresszum
		-> Kapcsolat

## Követelmények

Funkcionális követelmények:
	- A regisztrált felhasználók adatainak tárolása a GDPR-nak megfelelően	
	- Webes környezetben gördülékenyen kell működnie
 
   Nem funkcionális követelmények:
	- Letisztult, egyszerű kinézet
	- Különböző böngészők támogatása	

   Törvényi előírások:
	- A hatályban lévő GDPR szabályozásnak meg kell felelnie.

## Funkcionális terv

Rendszerszereplők:
	-Felhasználó
	-Admin

Rendszer használati esetek és lefutásaik:

	Felhasználó
		-Termékek megtakintése
		-Rendelés leadása
		-Bejelentkezés
		-Regisztráció
	
	Admin:
		-Termék adatainak módosítása
		-Termék törlése
		-Termék hozzáadása	
	
Menü hierarchiák:
	-Bejelentkezés
		-Bejelentkezés
		-Regisztráció
		
	-Index
	-Impresszum
	-Kapcsolat
	-Termékek(felhasználó)
		-Termék megrendelése
	-Termékek(admin)
		-Termék módosítása
		-Termék törlése
		-Termék hozzáadása

## Implementációs terv
A Webes felület főként HTML és CSS nyelven fog készülni. Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében. Az alkalmazás adatbázisát a PHP-alapú webes MySQL-kezelőfelülettel rendelkező phpMyAdmin-nal készítettük. Az eltelt időt a kliens fogja számolni a feladatoknál, hogy ne legyenek eltérések.