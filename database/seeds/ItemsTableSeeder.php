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
            'name'=>'Audi',
            'price'=>'12690000',
            'quantity'=>'12',
            'image'=>'images/audi.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata (8 fokozatú tiptronic) sebességváltó, automatikusan sötétedő belső tükör, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, CD-s autórádió, centrálzár, deréktámasz, digitális többzónás klíma, dönthető utasülések, EDS (elektronikus differenciálzár), elektromos ablak elöl, elektromos ablak hátul, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, esőszenzor, ESP (menetstabilizátor), faberakás, fedélzeti komputer, fékasszisztens, fényszóró magasságállítás, fényszórómosó, fűthető ablakmosó fúvókák, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, hátsó fejtámlák, HIFI, indításgátló (immobiliser), ISOFIX rendszer, kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, ködlámpa, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, lejtmenet asszisztens, memóriakártya-olvasó, memóriás vezetőülés, MP3 lejátszás, multifunkciós kormánykerék, oldallégzsák, panoráma tető, pótkerék, részecskeszűrő, riasztó, sávtartó rendszer, sávváltó asszisztens, szervokormány, színezett üveg, tempomat, tolatókamera, tolótető (napfénytető), utasoldali légzsák, ülésmagasság állítás, vezetőoldali légzsák, xenon fényszóró, azonnal elvihető, Magyarországon újonnan üzembe helyezett, nem dohányzó, rendszeresen karbantartott, szervizkönyv, törzskönyv.'
        ]);

        Item::create([
            'name'=>'BMW cabrio',
            'price'=>'37990000',
            'quantity'=>'5',
            'image'=>'images/bmw_cabrio.jpg',
            'description'=>'ABS (blokkolásgátló), ADS (adaptív lengéscsillapító), APS (parkolóradar), ASR (kipörgésgátló), automata (6 fokozatú tiptronic) sebességváltó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, AUX csatlakozó, állítható felfüggesztés, állítható kormány, bluetooth-os kihangosító, bőr belső, centrálzár, defektjavító készlet, digitális klíma, EBD/EBV (elektronikus fékerő-elosztó), EDC (elektronikus lengéscsillapítás vezérlés), elektromos ablak elöl, elektromos tolótető, elektromos tükör, elektromos ülésállítás utasoldal, elektromos ülésállítás vezetőoldal, elektromosan behajtható külső tükrök, elektronikus futómű hangolás, esőszenzor, ESP (menetstabilizátor), fedélzeti komputer, fényszórómosó, fűthető szélvédő, fűthető tükör, fűthető ülés, GPS (navigáció), guminyomás-ellenőrző rendszer, gyári erősítő, HIFI, indításgátló (immobiliser), kanyarkövető fényszóró, kikapcsolható légzsák, kormányváltó, könnyűfém felni, középső kartámasz, kulcsnélküli indítás, LED fényszóró, memóriakártya-olvasó, memóriás vezetőülés, MP3 lejátszás, MP4 lejátszás, multifunkciós kormánykerék, sávváltó asszisztens, sebességfüggő szervókormány, sperr differenciálmű, sportfutómű, sportülések, szervokormány, távolsági fényszóró asszisztens, tempomat, térdlégzsák, tolatókamera, tolatóradar, USB csatlakozó, utasoldali légzsák, ülésmagasság állítás, vászontető, vezetőoldali légzsák, visszagurulás-gátló, WMA lejátszás, keveset futott.'
        ]);

        Item::create([
            'name'=>'BMW sport',
            'price'=>'69900000',
            'quantity'=>'10',
            'image'=>'images/bmw_sport.jpg',
            'description'=>'ABS (blokkolásgátló), APS (parkolóradar), ASR (kipörgésgátló), automata sebességváltó, automatikusan sötétedő belső tükör, automatikusan sötétedő külső tükör, bluetooth-os kihangosító, bőr belső, bőr-szövet huzat, centrálzár, esőszenzor, ESP (menetstabilizátor), fékasszisztens, fényszórómosó, fűthető ablakmosó fúvókák, GPS (navigáció), guminyomás-ellenőrző rendszer, indításgátló (immobiliser), könnyűfém felni, középső kartámasz, LED fényszóró, lemeztető, manuális klíma, MP3 lejátszás, multifunkciós kormánykerék, riasztó, sportfutómű, sportülések, szervokormány, tempomat, tolatóradar, USB csatlakozó, utasoldali légzsák, vezetőoldali légzsák, garázsban tartott, keveset futott, Magyarországon újonnan üzembe helyezett, nem dohányzó.'
        ]);
    }
}

