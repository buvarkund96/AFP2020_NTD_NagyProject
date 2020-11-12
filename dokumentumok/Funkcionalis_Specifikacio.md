# Funkcionális Specifikáció
## 1. Bevezetés
## 2. Jelenlegi helyzet
## 3. Vágyálom rendszer
	A project célja egy a megrendelő igényeinek megfelelő, webshop létrehozása. A vásárlók utánvételes fizetéssel rendelhetnek.
	A vásárlók regisztráció után a kezdőlapon szabadon megtekinthetik a termékek listáját, árral együtt.
	Egy külön oldalon elhelyezve látható legyen a cég alap információi, elérhetőségei.
	A megrendelő egy külön oldalt szeretne a reklamációk, észrevételek, segítség kérések összegyűjtésére.
	Az összes termék listája egy külön oldalon megtalálható legyen, ahol a termékek árai csak bejelentkezés után lehessen látható.

## 4. Jelenlegi üzleti folyamatok modellje

	A megrendelő az üzleteinek online formában való lebonyolítására egy saját weboldalt szeretne, ahol a termékeit szabadon kilistázhatja és eladásra bocsáthatja.
	Manapság a legtöbb áruház rendelkezik online vásárlói felülettel. A megrendelő szeretné a termék eladási lehetőségeit tovább bővíteni, ezért saját webes áruház létrehozása mellet döntött.
	A megrendelő jellenleg nem rendelkezik ilyen webáruházzal, tehát egy teljesen új oldalt létrehozása a cél.

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
## 11. Fogalomszótár