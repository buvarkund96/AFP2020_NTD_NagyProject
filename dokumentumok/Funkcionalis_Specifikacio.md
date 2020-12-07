# Funkcionális Specifikáció
## 1. Bevezetés
	A technológia fejlődésével egy új lehetőség nyílik az interneten keresztül való árusításhoz. Az árusítás interneten történő lehetőségeiről senki nem akar lemaradni.
	Manapaság az emberek méginkább jobban preferálják az online megrendeléseket, ezért az árusító cég nagy bevételt bukhat ha nem rendelkezik webáruházzal.
	Ez garantálja a vásárlóknak a könyebb eligazodást a termékek között, a könyebb és biztonságosabb vásárlást és egy egyszerű lehetőségett biztosít panaszaik, észrevételeik, esetleges kérdéseik feltevéséhez.

## 2. Jelenlegi helyzet
	Jelenleg a megrendelő nem rendelkezik semmilyen lehetőséggel, hogy a termékeit online is árusítsa. A konkurens cégek majnem mindegyike rendelkezik már saját webshoppal és a megrendelő sem szeretne lemaradni tőlük.
	Fontosnak tarja ezért egy saját webshop létrehozását, hogy ezzel is a piaci lehetőségeit növelhesse és az eladásra szánt termékeit szabadon megtekinthessék, regisztrációval az árakat is láthassák a vásárlók és vásárolhassanak az oldalon.
	Szeretné a cég adatait, elérhetőségeit is feltúntettni, valamint reklamáció, segítség kérésre is lehetőséget biztosítani az oldalon.

## 3. Vágyálom rendszer
	A project célja egy a megrendelő igényeinek megfelelő, webshop létrehozása. A vásárlók utánvételes fizetéssel rendelhetnek.
	A vásárlóknak legyen lehetőségük bejelentkezni, ahol megadhatják a kiszállítási adataikat, és a termékeknél megtekinthetik az árakat.
	Egy külön oldalon elhelyezve látható legyen a cég alap információi, elérhetőségei.
	A megrendelő egy külön oldalt szeretne a reklamációk, észrevételek, segítség kérések összegyűjtésére.
		
	
## 4. Jelenlegi üzleti folyamatok modellje
	Jelenleg a vásárlóknak személyesen fel kell keresniük az üzletet. Csak helyben tudják felmérni a kínálatot, így házhozszállításra nincs lehetőség. A termék meghibásodása esetén a vásárlónak ismét fel kell keresnie az üzletet, amely körülményes lehet. 

## 5. Igényelt üzleti folyamatok modellje
A megrendelő egy olyan weboldalt szeretne ahonnan a vásárlók utánvételes fizetéssel tudnának rendelni, de csak akkor, ha regisztrálnak.

- Kezdőoldal: Itt termékek jelennek. Ellenőrízve, hogy a látogató be van-e jelentkezve. Amennyiben nincs bejelentkezve a termékek árát nem listázza ki.
- Impresszum oldal: Itt a cég információi láthatóak. A cég vezető elérhetőségei vannak feltüntetve.
- Kapcsolat oldal: Ezen az oldalon található, hogy egy esetleges reklamációval, segítség kéréssel kihez kell fordulni.
- Termékek oldal: Az összes elérhető termék szerepel ezen az oldalon. Ellenőrzésre kerül, hogy a látogató be van-e jelentkezve. Amennyiben nincsen így az árak nem jelennek meg.
- Bejelentkezés - Regisztráció oldal: Ezen a oldalon lehet regisztrálni vagy bejelentkezni. Bejelentkezés után automatikusan átirányít a kezdőlapra és kilistázza a termékeket, de már árral.

## 6. Követelménylista
### 6.1 Funkcionális követelmények 
k1: Keresés: 
- Lehessen keresni a termékek között.

k2: Jogkörök:
- A rendszerben vannak adminisztrátorok, felhasználók.

k3: Felhasználók és adminisztrátor jogkörei:
- Adminisztrátori jogkörök: 
Az admin képes a termékek leírását, árát módosítani. Képes új termékeket feltölteni.
- Felhasználói jogkörök:
A felhasználó képes a termékek összes paraméterét megtekinteni. 
### 6.2 Nem funkcionális követelmények
k4: Design:
- Felhasználóbarát, jól átlátható szerkezeti felépítés.

k5: Platform:
- Alkalmazás futtatható legyen az összes aktuálisan elérhető böngészők aktuális verziójával.

### 6.3 Biztonsági követelmények
k6: Titkosítás:
- A felhasználók jelszavait titkositva kell tárolni.

## 7. Képernyőtervek
A képernyő terveket a "kepernyo_terv" mappában lehet megtalálni JPG formátumban. Ezek látványtervek, tájékoztató jellegűek. A kivitelezés eltérhet, igény esetén módosítható. 
## 8. Használati esetek
Hozzáférések jogultság szerint:
- sima felhasználó
- adminisztrátor

Sima felhasználó használati esetei:
- Regisztráció: A felhasználó képes önmagát beregisztrálni a rendszerbe.
- Bejelentkezés: Regisztráció után megnyilik a bejelentkezés lehtősége a rendszerbe.
- Listázás: Képes az összes terméket kilistázni. 

Adminisztrátor felhasználó használati esetei:
- Bejelentkezés: Az adminisztrátor képes bejelentkezni a rendszerbe.
- Termékek kezelése: Képes a termékeket módosítani, új terméket felvenni.
- Listázás: Az admin képes az összes terméket kilistázni.
## 9. Forgatókönyvek
## 10. Funkció-követelmény megfeleltetés
f1: Jogkörök:
- k2, k3, k6 követelményeknek felel meg.
Más funkciókhoz fér hozzá egy sima felhasználó mint az adminisztrátor.

f2: Keresés:
- k1, k4, k5 követelményeknek felel meg.
Lehet keresni a termékek között.

f3: Termék kezelés: 
- k3, k4, k5 követelményeknek felel meg.
Az alkamazás admin felhasználóval képes termékeket feltölteni a rendszerbe azok adatait módositani, ha kell, illetve törölni is.

## 11. Fogalomszótár
HTML: Alapértelmezett leíró nyelv, weboldalak készítésére szokás használni.

CSS: HTML oldalak stílusnak leírására használatos nyelv.

PHP: Szerveroldali szkriptnyelv dinamikus weblapok készítésére.

SQL: Relációsadatbázis-kezelők lekérdezési nyelve.