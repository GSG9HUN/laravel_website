<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name'=>'LAND ROVER RANGE ROVER EVOQUE RangeEvoque',
            'category'=>'SUV',
            'brand'=>'Land Rover',
            'price'=>'7990000',
            'quantity'=>'5',
            'image'=>'images/RANGE_ROVER_EVOQUE.jpg',
            'description'=>'10 hangszóró, ABS (blokkolásgátló), ADS (adaptív lengéscsillapító), ASR (kipörgésgátló), automata (6 fokozatú) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, AUX csatlakozó, állítható kormány, bi-xenon fényszóró, bluetooth-os kihangosító, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális kétzónás klíma, dönthető utasülések, EBD/EBV (elektronikus fékerő-elosztó), elektromos ablak elöl, elektromos ablak hátul, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), érintőkijelző, fedélzeti komputer, fékasszisztens, fényszóró magasságállítás, fényszórómosó, fűthető kormány, fűthető szélvédő, fűthető tükör, fűthető ülés, GPS (navigáció), hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kormányváltó, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, lejtmenet asszisztens, memóriás vezetőülés, mélynyomó, MP3 lejátszás, MP4 lejátszás, multifunkciós kormánykerék, panoráma tető, rádió, riasztó, szervokormány, színezett üveg, távolsági fényszóró asszisztens, tempomat, térdlégzsák, tolatókamera, tolatóradar, tolótető (napfénytető), utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, visszagurulás-gátló, xenon fényszóró, garázsban tartott, nem dohányzó, rendszeresen karbantartott, törzskönyv.'
        ]);
        Item::create([
            'name'=>'MERCEDES-BENZ GLC',
            'category'=>'SUV',
            'brand'=>'Mercedes',
            'price'=>'19900000',
            'quantity'=>'2',
            'image'=>'images/mercedes_GLC.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (9 fokozatú tiptronic) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható combtámasz, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, centrálzár, defektjavító készlet, deréktámasz, digitális többzónás klíma, dönthető utasülések, EBD/EBV (elektronikus fékerő-elosztó), EDC (elektronikus lengéscsillapítás vezérlés), EDS (elektronikus differenciálzár), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan állítható fejtámlák, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fékasszisztens, függönylégzsák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, HIFI, holttér-figyelő rendszer, indításgátló (immobiliser), iPhone/iPod csatlakozó, ISOFIX rendszer, kikapcsolható légzsák, kormányváltó, könnyűfém felni, középső kartámasz, króm felni, kulcsnélküli indítás, LED fényszóró, memóriás vezetőülés, MP3 lejátszás, MP4 lejátszás, multifunkciós kormánykerék, oldallégzsák, panoráma tető, rádió, részecskeszűrő, sebességfüggő szervókormány, szervokormány, színezett üveg, tempomat, térdlégzsák, tolatókamera, tolatóradar, tolótető (napfénytető), USB csatlakozó, utasoldali légzsák, üléshűtés/szellőztetés, ülésmagasság állítás, vezetőoldali légzsák, visszagurulás-gátló, WMA lejátszás.'
        ]);
        Item::create([
            'name'=>'PORSCHE CAYENNE E-Hybrid',
            'category'=>'SUV',
            'brand'=>'Porsche',
            'price'=>'34990000',
            'quantity'=>'1',
            'image'=>'images/porsche_cayenne.jpg',
            'description'=>'ABS (blokkolásgátló), ajtószervó, APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, állítható combtámasz, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, EBD/EBV (elektronikus fékerő-elosztó), EDC (elektronikus lengéscsillapítás vezérlés), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan állítható fejtámlák, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), érintőkijelző, fedélzeti komputer, fékasszisztens, függönylégzsák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, memóriás vezetőülés, MP3 lejátszás, MSR (motorféknyomaték szabályzás), multifunkciós kormánykerék, oldallégzsák, panoráma tető, riasztó, sávváltó asszisztens, sebességfüggő szervókormány, szervokormány, színezett üveg, távolsági fényszóró asszisztens, tempomat, térdlégzsák, tolatókamera, tolatóradar, tolótető (napfénytető), USB csatlakozó, utasoldali légzsák, üléshűtés/szellőztetés, ülésmagasság állítás, vezetőoldali légzsák, WMA lejátszás.'
        ]);
        Item::create([
            'name'=>'BMW X3',
            'category'=>'SUV',
            'brand'=>'BMW',
            'price'=>'14990000',
            'quantity'=>'6',
            'image'=>'images/bmw_x3.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható combtámasz, állítható kormány, bluetooth-os kihangosító, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális többzónás klíma, elektromos ablak elöl, elektromos ablak hátul, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, függönylégzsák, fűthető kormány, fűthető tükör, fűthető ülés, guminyomás-ellenőrző rendszer, HIFI, hűthető kesztyűtartó, indításgátló (immobiliser), ISOFIX rendszer, kikapcsolható légzsák, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, memóriás vezetőülés, MP3 lejátszás, multifunkciós kormánykerék, rádió, sebességfüggő szervókormány, sportülések, szervokormány, távolsági fényszóró asszisztens, tempomat, tolatókamera, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, keveset futott, nem dohányzó, rendszeresen karbantartott, szervizkönyv.'
        ]);

        Item::create([
            'name'=>'Audi',
            'category'=>'SUV',
            'brand'=>'Audi',
            'price'=>'12690000',
            'quantity'=>'12',
            'image'=>'images/audi.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikusan sötétedő belső tükör, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, EDS (elektronikus differenciálzár), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, esőszenzor, ESP (menetstabilizátor), faberakás, fedélzeti komputer, fékasszisztens, fényszóró magasságállítás, fényszórómosó, fűthető ablakmosó fúvókák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, lejtmenet asszisztens, memóriakártya-olvasó, memóriás vezetőülés, MP3 lejátszás, multifunkciós kormánykerék, oldallégzsák, panoráma tető, pótkerék, részecskeszűrő, riasztó, sávtartó rendszer, sávváltó asszisztens, szervokormány, színezett üveg, tempomat, tolatókamera, tolótető (napfénytető), utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, xenon fényszóró, azonnal elvihető, Magyarországon újonnan üzembe helyezett, nem dohányzó, rendszeresen karbantartott, szervizkönyv, törzskönyv.'
        ]);

        Item::create([
            'name'=>'BMW cabrio',
            'category'=>'sport',
            'brand'=>'BMW',
            'price'=>'37990000',
            'quantity'=>'5',
            'image'=>'images/bmw_cabrio.jpg',
            'description'=>'ABS (blokkolásgátló), ADS (adaptív lengéscsillapító), APS (parkolóradar), ASR (kipörgésgátló), automata (6 fokozatú tiptronic) sebességváltó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, centrálzár, defektjavító készlet, digitális klíma, EBD/EBV (elektronikus fékerő-elosztó), EDC (elektronikus lengéscsillapítás vezérlés), elektromos ablak elöl, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan behajtható külső tükrök, elektronikus futómű hangolás, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fényszórómosó, fűthető szélvédő, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, HIFI, indításgátló (immobiliser), kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, memóriakártya-olvasó, memóriás vezetőülés, MP3 lejátszás, MP4 lejátszás, multifunkciós kormánykerék, sávváltó asszisztens, sebességfüggő szervókormány, sperr differenciálmű, sportfutómű, sportülések, szervokormány, távolsági fényszóró asszisztens, tempomat, térdlégzsák, tolatókamera, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vászontető, vezetőoldali légzsák, visszagurulás-gátló, WMA lejátszás, keveset futott.'
        ]);

        Item::create([
            'name'=>'BMW sport',
            'category'=>'sport',
            'brand'=>'BMW',
            'price'=>'69900000',
            'quantity'=>'10',
            'image'=>'images/bmw_sport.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata sebességváltó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, bluetooth-os kihangosító, bőr belső, bőr-szövet huzat, centrálzár, esőszenzor, ESP (menetstabilizátor), fékasszisztens, fényszórómosó, fűthető ablakmosó fúvókák, GPS (navigáció), guminyomás-ellenőrző rendszer, indításgátló (immobiliser), könnyűfém felni, középső kartámasz, LED fényszóró, lemeztető, manuális klíma, MP3 lejátszás, multifunkciós kormánykerék, riasztó, sportfutómű, sportülések, szervokormány, tempomat, tolatóradar, USB csatlakozó, utasoldali légzsák, vezetőoldali légzsák, garázsban tartott, keveset futott, Magyarországon újonnan üzembe helyezett, nem dohányzó.'
        ]);

        Item::create([
            'name'=>'Skoda Superb',
            'category'=>'Kombi',
            'brand'=>'Skoda',
            'price'=>'3590000',
            'quantity'=>'1',
            'image'=>'images/skoda_superb.jpg',
            'description'=>'ABS (blokkolásgátló), ASR (kipörgésgátló), automata sebességváltó, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható kormány, bluetooth-os kihangosító, CD-s autórádió, centrálzár, deréktámasz, digitális kétzónás klíma, dönthető utasülések, elektromos ablak elöl, elektromos ablak hátul, elektromos tükör, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fényszórómosó, függönylégzsák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, hátsó fejtámlák, HIFI, hűthető kesztyűtartó, indításgátló (immobiliser), ISOFIX rendszer, ködlámpa, könnyűfém felni, középső kartámasz, memóriakártya-olvasó, MP3 lejátszás, MP4 lejátszás, multifunkciós kormánykerék, oldallégzsák, plüss kárpit, rádió, részecskeszűrő, szervokormány, színezett üveg, tempomat, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, visszagurulás-gátló, WMA lejátszás, autóbeszámítás lehetséges, azonnal elvihető, nem dohányzó, rendszeresen karbantartott, törzskönyv.' ]);

        Item::create([
            'name'=>'AUDI Q7',
            'category'=>'SUV',
            'brand'=>'Audi',
            'price'=>'5490000 ',
            'quantity'=>'56',
            'image'=>'images/skoda_superb.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, állítható combtámasz, állítható kormány, bi-xenon fényszóró, bluetooth-os kihangosító, bőr belső, bőr-szövet huzat, CD-s autórádió, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, EDS (elektronikus differenciálzár), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan behajtható külső tükrök, erősítő, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fékasszisztens, fényszórómosó, fűthető ablakmosó fúvókák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, ködlámpa, könnyűfém felni, középső kartámasz, memóriakártya-olvasó, mélynyomó, multifunkciós kormánykerék, oldallégzsák, panoráma tető, pótkerék, részecskeszűrő, riasztó, szervokormány, színezett üveg, tempomat, tolatóradar, tolótető (napfénytető), utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, xenon fényszóró, Magyarországon újonnan üzembe helyezett, rendszeresen karbantartott, szervizkönyv.'
        ]);

        Item::create([
            'name'=>'BMW X6',
            'category'=>'SUV',
            'brand'=>'BMW',
            'price'=>'22990000',
            'quantity'=>'25',
            'image'=>'images/bmw_x6.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható combtámasz, állítható felfüggesztés, állítható hátsó ülések, állítható kormány, bluetooth-os kihangosító, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, EBD/EBV (elektronikus fékerő-elosztó), EDC (elektronikus lengéscsillapítás vezérlés), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan állítható fejtámlák, elektromosan behajtható külső tükrök, elektronikus futómű hangolás, esőszenzor, ESP (menetstabilizátor), faberakás, fedélzeti komputer, fékasszisztens, fényszórómosó, függönylégzsák, fűthető ablakmosó fúvókák, fűthető szélvédő, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, hátsó oldal légzsák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, lejtmenet asszisztens, memóriás vezetőülés, merevlemez, MP3 lejátszás, multifunkciós kormánykerék, oldallégzsák, panoráma tető, rádió, részecskeszűrő, riasztó, sávtartó rendszer, sebességfüggő szervókormány, sportfutómű, sportülések, szervokormány, színezett üveg, távolsági fényszóró asszisztens, távolságtartó tempomat, tempomat, tolatókamera, tolatóradar, tolótető (napfénytető), USB csatlakozó, utasoldali légzsák, üléshűtés/szellőztetés, ülésmagasság állítás, vezetőoldali légzsák, visszagurulás-gátló, garázsban tartott, keveset futott, Magyarországon újonnan üzembe helyezett, nem dohányzó, rendszeresen karbantartott, szervizkönyv, törzskönyv.'
        ]);

        Item::create([
            'name'=>'BMW X4',
            'category'=>'SUV',
            'brand'=>'BMW',
            'price'=>'27990000',
            'quantity'=>'25',
            'image'=>'images/bmw_x4.jpg',
            'description'=>'12 hangszóró, ABS (blokkolásgátló), ADS (adaptív lengéscsillapító), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, állítható combtámasz, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan állítható fejtámlák, elektromosan behajtható külső tükrök, elektronikus futómű hangolás, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fékasszisztens, függönylégzsák, fűthető ablakmosó fúvókák, fűthető kormány, fűthető tükör, fűthető ülés, garázsajtó távirányító, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, HIFI, holttér-figyelő rendszer, indításgátló (immobiliser), ISOFIX rendszer, kanyarkövető fényszóró, kormányváltó, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, lejtmenet asszisztens, memóriás vezetőülés, mélynyomó, MP3 lejátszás, multifunkciós kormánykerék, műbőr-kárpit, oldallégzsák, panoráma tető, pótkerék, riasztó, sávtartó rendszer, sávváltó asszisztens, sebességfüggő szervókormány, sportfutómű, sportülések, szervokormány, színezett üveg, tábla-felismerő funkció, távolsági fényszóró asszisztens, tempomat, tolatókamera, tolatóradar, tolótető (napfénytető), utasoldali légzsák, üléshűtés/szellőztetés, ülésmagasság állítás, vezetőoldali légzsák, visszagurulás-gátló, autóbeszámítás lehetséges, első tulajdonostól, garanciális, keveset futott, Magyarországon újonnan üzembe helyezett, nem dohányzó, szervizkönyv, törzskönyv.'
        ]);

        Item::create([
            'name'=>'MITSUBISHI OUTLANDER',
            'category'=>'SUV',
            'brand'=>'Mitsubishi',
            'price'=>'5699000',
            'quantity'=>'99',
            'image'=>'images/mitsubishi_outlander.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automatikusan sötétedő külső tükör, AUX csatlakozó, állítható kormány, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális kétzónás klíma, dönthető utasülések, EBD/EBV (elektronikus fékerő-elosztó), EDS (elektronikus differenciálzár), elektromos ablak elöl, elektromos ablak hátul, elektromos tükör, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fényszóró magasságállítás, fényszórómosó, fokozatmentes automata sebességváltó, függönylégzsák, fűthető ülés, GPS (navigáció), hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kihangosító, ködlámpa, könnyűfém felni, középső kartámasz, króm felni, kulcsnélküli indítás, lemeztető, multifunkciós kormánykerék, oldallégzsák, szervokormány, színezett üveg, tempomat, tolatókamera, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, vonóhorog, autóbeszámítás lehetséges, frissen szervizelt, garázsban tartott, keveset futott, rendszeresen karbantartott, szervizkönyv, törzskönyv.'
        ]);

        Item::create([
            'name'=>'RENAULT KOLEOS',
            'category'=>'SUV',
            'brand'=>'Renault',
            'price'=>'9850000',
            'quantity'=>'12',
            'image'=>'images/renault_coleos.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automatikus csomagtér-ajtó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható kormány, bluetooth-os kihangosító, bőr-szövet huzat, centrálzár, defektjavító készlet, digitális kétzónás klíma, dönthető utasülések, elektromos ablak elöl, elektromos ablak hátul, elektromos tükör, elektromosan behajtható külső tükrök, esőszenzor, ESP (menetstabilizátor), faberakás, fedélzeti komputer, fékasszisztens, fényszóró magasságállítás, fényszórómosó, fokozatmentes automata sebességváltó, fűthető ablakmosó fúvókák, fűthető kormány, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, hátsó fejtámlák, indításgátló (immobiliser), ISOFIX rendszer, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, MP3 lejátszás, multifunkciós kormánykerék, oldallégzsák, részecskeszűrő, sávváltó asszisztens, szervokormány, távolsági fényszóró asszisztens, tempomat, tolatókamera, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, első tulajdonostól, keveset futott, Magyarországon újonnan üzembe helyezett, nem dohányzó, törzskönyv.'
        ]);



    }
}

