# Követelmény Specifikáció
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

A megrendelő egy olyan weboldalt szeretne amin a dizájn minimalista, nincs bonyolult menü szerkezet, egyszerű az oldalon a navigáció. Rendelkezik egy admin felülettel ahol a termékeket hozzá tudja adni és a paramétereit tudja szerkeszteni. A másik elvárása a megrendelőnek, hogy a reklámok olyan helyen legyenek, hogy ne zavarják a vásárlókat. 

A megrendelő elvárásai az adminok részére:

- A termékek leírását ők tudják szerkeszteni.
- Új terméket Ők tudják hozzáadni. 

A megrendelő elvárásai a felhasználókkal szemben:

- Megtekinthetik a terméket.
- Látják a termék árát.

A megrendelő elvárásai a látogatókkal:

- Megtekinthetik a terméket.
- Nem láthatják a termékek árát.

Oldal használat:
Kezdő oldal ->  Bejelentkezés       ->    Termékek (árral)
                                          Kosár
                Termékek (ár nélkül)
 
## 6. Követelménylista 

|  Követelmény sorszáma | Követelmény megnevezése  | Követelményekről bővebben | 
|-----------------------|--------------------------|---------------------------|
|         K001          |Minimalista dizájn        |         5. fejezet        |
|         K002          |Több szerepkör            |         5. fejezet        |