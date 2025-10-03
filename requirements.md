# Kontrolling és Döntéstámogatás Rendszer - Követelmények

## Program Célja

Ez a Laravel alapú kontrolling és döntéstámogatási rendszer célja a vállalati teljesítmény mérése, elemzése és a vezetői döntéshozatal támogatása. A rendszer képes különböző adatforrásokból adatokat gyűjteni, feldolgozni, elemezni és jelentéseket készíteni.

---

## 1. ADATBÁZIS KAPCSOLATOK

### Cél
Az információ elérhetőségének biztosítása. A rendszer legyen képes több különböző vállalati adatforráshoz csatlakozni, valamint az ezekből kapott inputok feldolgozására adatfeldolgozási és elemzési céllal.

### Kötelező Követelmény
- A rendszernek közvetlen kapcsolata legyen **legalább 1 adatbázissal** a vállalatnál
- Támogassa különböző adatbázis típusok használatát (MySQL, PostgreSQL, SQL Server, stb.)

### Implementációs Feladatok
- [ ] Adatbázis kapcsolat konfiguráció beállítása
- [ ] Több adatforrás kezelésének támogatása
- [ ] Adatimport mechanizmus kialakítása
- [ ] Adatvalidáció és hibakezelés

### Ellenőrzés Módszere
Működő adatbázis kapcsolat demonstrálása és adatok lekérdezése a rendszerben.

---

## 2. RIPORTOK EREDMÉNYÉNEK EXPORTÁLÁSA

### Cél
Az információk kinyerhetőségének, továbbfelhasználhatóságának biztosítása. A rendszer tegye lehetővé riportok eredményének exportálását továbbfelhasználható formátumban.

### Kötelező Követelmény
- **Legalább 3 kontrollinghoz kapcsolódó riport** eredményének exportálása
- Támogatott formátumok: **XLS, TXT, CSV vagy XML**

### Implementációs Feladatok
- [ ] Excel export funkció implementálása (XLS/XLSX)
- [ ] CSV export funkció implementálása
- [ ] TXT export funkció implementálása
- [ ] XML export funkció implementálása
- [ ] Export gombok hozzáadása a riportokhoz
- [ ] Fájlnév generálás és letöltés kezelése

### Javasolt Riport Típusok
1. **Költséghely jelentés** - költséghelyek szerinti bontás
2. **Terv-tény összehasonlítás** - tervezett vs. tényleges értékek
3. **Teljesítmény mutatószámok** - KPI-k és metrikák

### Ellenőrzés Módszere
3 különböző kontrolling riport exportálásának bemutatása a támogatott formátumok valamelyikében.

---

## 3. MUTATÓSZÁMOK DEFINIÁLÁSA

### Cél
A menedzsment döntéshozatalát megkönnyítő mutatószámok definiálása. A rendszer tegye lehetővé a vállalat teljesítményének mérését, terv-tény adatok összehasonlítását.

### Kötelező Követelmény
- Mutatószámok definiálásának lehetősége
- Teljesítménymérő mutatószámok kezelése
- Terv-tény összehasonlítás támogatása
- Mutatószámok egységes megjelenítése

### Implementációs Feladatok
- [ ] KPI/Mutatószám adatbázis modell létrehozása
- [ ] Mutatószám definíció felület (CRUD)
- [ ] Számítási képletek definiálása
- [ ] Dashboard/kimutatás nézetek készítése
- [ ] Terv vs. tény összehasonlítás funkció
- [ ] Vizualizációk (grafikonok, táblázatok)

### Példa Mutatószámok
- **Jövedelmezőségi mutatók**: ROI, ROE, profit margin
- **Hatékonysági mutatók**: költséghatékonyság, termelékenység
- **Likviditási mutatók**: folyó likviditás, gyors ráta
- **Terv-tény eltérések**: %-os és abszolút eltérések

### Ellenőrzés Módszere
Teljesítménymérő mutatószámok meglétének és egységes megjelenítésének ellenőrzése a rendszerben.

---

## 4. ELŐRE DEFINIÁLT ÉS AD-HOC LEKÉRDEZÉSEK

### Cél
A vezetői döntéshozatal támogatása, a terv-tény adatok könnyebb nyomon-követhetőségének elősegítése.

### Kötelező Követelmény
- Előre definiált lekérdezések támogatása
- Paraméterezhető lekérdezések
- **Legalább 1 vállalat-specifikus** paraméterezhető lekérdezés
- **Legalább 1 iparág-specifikus** paraméterezhető lekérdezés
- **Legalább 1 előre definiált** lekérdezés

### Implementációs Feladatok
- [ ] Lekérdezés építő (Query Builder) funkció
- [ ] Mentett lekérdezések kezelése
- [ ] Paraméterezés felület
- [ ] Vállalat-specifikus lekérdezés sablon
- [ ] Iparág-specifikus lekérdezés sablon
- [ ] Gyors/előre definiált lekérdezések menü

### Lekérdezés Típusok
1. **Előre definiált**: Fix, gyakran használt riportok
2. **Paraméterezhető**: Dátumtartomány, költséghely, termék szűrők
3. **Ad-hoc**: Egyedi, felhasználó által összeállított lekérdezések

### Ellenőrzés Módszere
Legalább 1 vállalat-specifikus, 1 iparág-specifikus paraméterezhető és 1 előre definiált lekérdezés elvégzése.

---

## 5. MÉRTÉKEGYSÉGEK KEZELÉSE

### Cél
A kimutatások készítésének egyszerűsítése, az összehasonlíthatóság megkönnyítése különböző mértékegységek esetén.

### Kötelező Követelmény
- Különböző **pénznemekben** történő kimutatások
- **Naturáliákban** történő kimutatások (db, kg, m, stb.)
- **Százalékos** értékek kezelése
- **Legalább 3 különböző naturália vagy pénznem** egy kimutatásban

### Implementációs Feladatok
- [ ] Mértékegység konfigurációs rendszer
- [ ] Pénznem konverziós funkció
- [ ] Naturália kezelés (db, kg, liter, stb.)
- [ ] Százalékos számítások
- [ ] Többféle mértékegység megjelenítése egy riportban
- [ ] Átváltási árfolyamok kezelése

### Példa Mértékegységek
- **Pénznemek**: HUF, EUR, USD
- **Naturáliák**: db (darab), kg, m³, óra, stb.
- **Százalékok**: terv-tény %, növekedési ráta

### Ellenőrzés Módszere
Egy kontrolling kimutatás készítése, mely legalább 3 különböző naturáliát vagy pénznemet tartalmaz.

---

## 6. TÉNYADATOK FOLYAMATOS VEZETÉSE

### Cél
Folyamatos, naprakész információk biztosítása a különböző szempontú kontrolling számításokhoz és elemzésekhez.

### Kötelező Követelmény
- Folyamatos vagy **legalább napi egyszeri** adatbetöltés
- Ütemezett adatbetöltés
- Adatok **maximum 24 órával** korábbinak kell lenniük
- Különböző számítási szempontok támogatása:
  - Költséghely számítás
  - Költségnem számítás
  - Folyamat-költség számítás
  - Termékköltség számítás
  - Eredményszámítás

### Implementációs Feladatok
- [ ] Laravel ütemezett feladatok (Schedule) beállítása
- [ ] Napi automatikus adatimport job
- [ ] Adatfrissítési mechanizmus
- [ ] Timestamp kezelés és naprakészség ellenőrzés
- [ ] Különböző számítási típusok implementálása
- [ ] Hibakezelés és logging az adatbetöltésnél

### Számítási Típusok
1. **Költséghely számítás**: költségek felosztása költséghelyek szerint
2. **Költségnem számítás**: költségek típus szerinti csoportosítása
3. **Folyamat-költség**: folyamatok költségeinek számítása
4. **Termékköltség**: termékekre jutó költségek
5. **Eredményszámítás**: bevétel, költség, profit számítások

### Ellenőrzés Módszere
A rendszerben megtalálhatóak a legfrissebb (legfeljebb 24 órával korábbi) adatok.

---

## 7. MODELLEK KÉSZÍTÉSE

### Cél
Modellek segítségével mennyiségi vagy költség analízis készítése.

### Kötelező Követelmény
- Költségszámítási modellek
- Elemzési modellek
- Modellek megjelenítése a rendszerben

### Implementációs Feladatok
- [ ] Költségszámítási modell struktúra kialakítása
- [ ] Elemzési modell sablon létrehozása
- [ ] Modell paraméterezés
- [ ] Modell futtatás és eredmény megjelenítés
- [ ] Szcenárió elemzés támogatása
- [ ] What-if elemzések

### Modell Típusok
1. **Költségszámítási modellek**:
   - Változó és fix költségek
   - Fedezeti pont számítás
   - Költség allokáció

2. **Elemzési modellek**:
   - Trend elemzés
   - Variancia elemzés
   - Szcenárió elemzés
   - Érzékenység vizsgálat

### Ellenőrzés Módszere
A rendszerben megjelenő költségszámítási vagy elemzési modell megtekintése.

---

## Technikai Környezet

### Backend
- **Framework**: Laravel 12
- **PHP**: 8.4.13
- **Admin Panel**: Filament v4

### Frontend
- **CSS Framework**: Tailwind CSS v4
- **Reactive**: Livewire v3

### Tesztelés
- **Pest**: v4 (Browser testing támogatással)
- **Laravel Pint**: v1 (kódformázás)

### DevOps
- **Laravel Sail**: v1 (Docker környezet)
- **Rector**: v2 (kód refaktorálás)
- **Larastan**: v3 (statikus elemzés)

---

## Implementációs Ütemterv

### 1. Fázis: Alapinfrastruktúra (1-2 hét)
- [ ] Adatbázis séma tervezés
- [ ] Modellek és migrációk létrehozása
- [ ] Alap CRUD műveletek Filament-ben
- [ ] Autentikáció és jogosultságkezelés

### 2. Fázis: Adatkezelés (2-3 hét)
- [ ] Adatbázis kapcsolatok beállítása
- [ ] Adatimport mechanizmus
- [ ] Ütemezett feladatok implementálása
- [ ] Mértékegység kezelés

### 3. Fázis: Riportok és Export (2-3 hét)
- [ ] Riport nézetek létrehozása
- [ ] Export funkciók (XLS, CSV, TXT, XML)
- [ ] Mutatószámok definiálása
- [ ] Dashboard fejlesztés

### 4. Fázis: Lekérdezések és Modellek (2-3 hét)
- [ ] Query Builder implementálás
- [ ] Előre definiált lekérdezések
- [ ] Paraméterezhető lekérdezések
- [ ] Számítási modellek

### 5. Fázis: Tesztelés és Finomítás (1-2 hét)
- [ ] Pest tesztek írása
- [ ] Browser tesztek
- [ ] Teljesítmény optimalizálás
- [ ] Dokumentáció

---

## Sikerkritériumok

✅ **Adatbázis**: Minimum 1 működő adatbázis kapcsolat
✅ **Export**: 3 riport exportálható XLS/CSV/TXT/XML formátumban
✅ **KPI**: Mutatószámok definiálva és megjelenítve
✅ **Lekérdezések**: 1 vállalat-specifikus + 1 iparág-specifikus + 1 előre definiált
✅ **Mértékegységek**: 1 kimutatás 3 különböző mértékegységgel
✅ **Naprakészség**: Max 24 órás adatok a rendszerben
✅ **Modellek**: Működő költségszámítási/elemzési modell

---

## Fejlesztési Irányelvek

1. **Laravel Best Practices**: Kövesd a Laravel 12 konvenciókat
2. **Filament v4**: Használd a Filament komponenseket
3. **Tesztelés**: Minden funkció legyen lefedve Pest tesztekkel
4. **Kódminőség**: Futtasd a Pint-et és Larastan-t rendszeresen
5. **Dokumentáció**: Frissítsd a kód dokumentációt folyamatosan
