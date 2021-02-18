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
            'name'=>'16gb 2400mhz ddr4 ram kingston hyperx fury black cl15 (2x8gb)',
            'category'=>'RAM',
            'brand'=>'Kingston Hyperx',
            'price'=>'30780',
            'quantity'=>'152',
            'image'=>'images/Hyperx_ddr4_16GB.jpg',
            'description'=>'Megújult a HyperX Fury memóriacsalád!
                            Az új HyperX Fury még a legkeményebb csatában is helyt áll, mivel automatikusan a legmagasabb frekvenciára állítja be az órajelet (2400 MHz-es és 2666 MHz-es modellek esetében), így biztosan nem ez lesz a konfigurációd gyenge pontja.
                            A Fury karcsú, aszimmetrikus hűtőbordája fokozott hőelvezetést biztosít, ami segít a rendszer hűvösen tartásában, és egyedi külsőt kölcsönöz.',
            'frequency'=>'2400Mhz',
            'type'=>'DDR4',
            'capacity'=>'16GB'

        ]);
        Item::create([
            'name'=>'Corsair memória Vengeance LPX Black 8GB 3000MHz DDR4 RAM CL16',
            'category'=>'RAM',
            'brand'=>'Corsair',
            'price'=>'49990',
            'quantity'=>'158',
            'image'=>'images/corsair_ddr4_8GB.jpg',
            'frequency'=>'3000Mhz',
            'type'=>'DDR4',
            'capacity'=>'8GB'
            ]);
        Item::create([
            'name'=>'Team Group 4GB DDR3 1600MHz Cl11 memória',
            'category'=>'RAM',
            'brand'=>'Team Group',
            'price'=>'6990',
            'quantity'=>'15',
            'image'=>'images/team_group_ddr3_8GB.jpg',
            'description'=>'4GB, DDR3, 1600MHz, CL11',
            'frequency'=>'1600Mhz',
            'type'=>'DDR3',
            'capacity'=>'4GB'
        ]);
        Item::create([
            'name'=>'Corsair 8GB Dual Channel készlet (2 x 4GB), DDR3, 1600MHz, Kék Radiátor',
            'category'=>'RAM',
            'brand'=>'Corsair',
            'price'=>'17990',
            'quantity'=>'15',
            'image'=>'images/corsair_ddr3_8GB.jpg',
            'frequency'=>'1600Mhz',
            'type'=>'DDR3',
            'capacity'=>'8GB'
        ]);
        Item::create([
            'name'=>'Corsair Vengeance LP 8GB (1x8GB) RAM DIMM memória, DDR3 1600MHz, CL10, 1.5V, XMP, Fekete',
            'category'=>'RAM',
            'brand'=>'Corsair',
            'price'=>'15390',
            'quantity'=>'10',
            'image'=>'images/corsair_ddr3_1600_8GB.jpg',
            'frequency'=>'1600Mhz',
            'type'=>'DDR3',
            'capacity'=>'8GB'
        ]);
        Item::create([
            'name'=>'G.Skill 16GB /3200 TridentZ RGB DDR4 RAM KIT (2x8GB)',
            'category'=>'RAM',
            'brand'=>'G.Skill',
            'price'=>'44690',
            'quantity'=>'10',
            'image'=>'images/g_skill_ddr4_16GB.jpg',
            'frequency'=>'3200Mhz',
            'type'=>'DDR4',
            'capacity'=>'16GB'
        ]);
        Item::create([
            'name'=>'128GB 3200MHz DDR4 RAM Kingston HyperX Fury Black CL16 (4x32GB)',
            'category'=>'RAM',
            'brand'=>'Kingston',
            'price'=>'345930',
            'quantity'=>'5',
            'image'=>'images/hyperx_ddr4_128GB.jpg',
            'frequency'=>'3200Mhz',
            'type'=>'DDR4',
            'capacity'=>'128GB'
        ]);
        Item::create([
            'name'=>'Kingston 32GB /2666 HyperX Impact DDR4 Notebook RAM KIT (2x16GB)',
            'category'=>'RAM',
            'brand'=>'Kingston',
            'price'=>'67634',
            'quantity'=>'2',
            'image'=>'images/hyperx_impact_ddr4_32GB.jpg',
            'frequency'=>'2666Mhz',
            'type'=>'DDr4',
            'capacity'=>'32GB'
        ]);
        Item::create([
            'name'=>'V7 4GB /667 DDR2 Szerver RAM',
            'category'=>'RAM',
            'brand'=>'V7',
            'price'=>'8230',
            'quantity'=>'1',
            'image'=>'images/v7_ddr2_48GB.jpg',
            'frequency'=>'667Mhz',
            'type'=>'DDR2',
            'capacity'=>'48GB'
        ]);
        Item::create([
            'name'=>'16GB 2666MHz DDR4 RAM Corsair Vengeance RGB PRO CL16 (2x8GB)',
            'category'=>'RAM',
            'brand'=>'Corsair',
            'price'=>'44470',
            'quantity'=>'55',
            'image'=>'images/corsair_ddr4_16GB.jpg',
            'frequency'=>'2666Mhz',
            'type'=>'DDR4',
            'capacity'=>'16GB'
        ]);


        Item::create([
            'name'=>'Intel Core i5-9400F processzor, 2.9 GHz, 9MB, Socket 1151',
            'category'=>'Processor',
            'brand'=>'Intel',
            'price'=>'47990',
            'quantity'=>'55',
            'image'=>'images/intel_i5.jpg',
            'frequency'=>'2900Mhz',
            'turbo'=>'4100Mhz',
            'core'=>'6',
            'thread'=>'6',
            'socket'=>'1151',
            'cache'=>'9MB'
        ]);

        Item::create([
            'name'=>'AMD Ryzen™ 5 1600 processzor, 3.6GHz, 19MB, Wraith Stealth Cooler',
            'category'=>'Processor',
            'brand'=>'AMD',
            'price'=>'54990',
            'quantity'=>'10',
            'image'=>'images/amd_ryzen5.jpg',
            'frequency'=>'3200Mhz',
            'turbo'=>'3600Mhz',
            'core'=>'6',
            'thread'=>'12',
            'socket'=>'AM4',
            'cache'=>'19MB'
        ]);
        Item::create([
            'name'=>'AMD Ryzen™ 5 3600 Processzor, 35MB, 4.2 GHz, Wraith Stealth cooler',
            'category'=>'Processor',
            'brand'=>'AMD',
            'price'=>'92990',
            'quantity'=>'10',
            'image'=>'images/amd_ryzen5.jpg',
            'frequency'=>'3600Mhz',
            'turbo'=>'4200Mhz',
            'core'=>'6',
            'thread'=>'12',
            'socket'=>'AM4',
            'cache'=>'35MB'
        ]);
        Item::create([
            'name'=>'AMD Ryzen 5 3600X processzor, 4.4 GHz, 35MB, AM4 Socket, Wraith Spire cooler',
            'category'=>'Processor',
            'brand'=>'AMD',
            'price'=>'120350',
            'quantity'=>'10',
            'image'=>'images/amd_ryzen5.jpg',
            'frequency'=>'3800Mhz',
            'turbo'=>'4400Mhz',
            'core'=>'6',
            'thread'=>'12',
            'socket'=>'AM4',
            'cache'=>'35MB'
        ]);
        Item::create([
            'name'=>'AMD Ryzen 5 3600X processzor, 4.4 GHz, 35MB, AM4 Socket, Wraith Spire cooler',
            'category'=>'Processor',
            'brand'=>'AMD',
            'price'=>'171224',
            'quantity'=>'10',
            'image'=>'images/amd_ryzen7.jpg',
            'frequency'=>'3200Mhz',
            'turbo'=>'4100Mhz',
            'core'=>'8',
            'thread'=>'16',
            'socket'=>'AM4',
            'cache'=>'20MB'
        ]);

        Item::create([
            'name'=>'Intel® Core™ i7-6700K Processzor, 4GHz, Skylake, 8MB, Socket 1151, Box',
            'category'=>'Processor',
            'brand'=>'Intel',
            'price'=>'119421',
            'quantity'=>'10',
            'image'=>'images/intel_i7.jpg',
            'frequency'=>'4000Mhz',
            'turbo'=>'4200Mhz',
            'core'=>'4',
            'thread'=>'8',
            'socket'=>'1151',
            'cache'=>'8MB'
        ]);

        Item::create([
            'name'=>'Intel Core i7-9700K Coffee Lake-R processzor, 3.60GHz, Socket 1151, Box',
            'category'=>'Processor',
            'brand'=>'Intel',
            'price'=>'105990',
            'quantity'=>'10',
            'image'=>'images/intel_i7.jpg',
            'frequency'=>'3600Mhz',
            'turbo'=>'4900Mhz',
            'core'=>'8',
            'thread'=>'8',
            'socket'=>'1151
                        Csak a 300-as sorozatú lapkakészletekkel kompatibilis',
            'cache'=>'12MB'
        ]);
        Item::create([
            'name'=>'Intel Core i9-9900K Coffee Lake-R processzor, 3.60GHz, Socket 1151, Box',
            'category'=>'Processor',
            'brand'=>'Intel',
            'price'=>'149900',
            'quantity'=>'10',
            'image'=>'images/intel_i9.jpg',
            'frequency'=>'3600Mhz',
            'turbo'=>'5000Mhz',
            'core'=>'8',
            'thread'=>'16',
            'socket'=>'1151
                        Csak a 300-as sorozatú lapkakészletekkel kompatibilis',
            'cache'=>'16MB'
        ]);
        Item::create([
            'name'=>'AMD Ryzen™ 9 5900X Gaming desktop processzor, 70MB, max. 4.8GHz, 12 mag, 24 szál, hűtés nélkül',
            'category'=>'Processor',
            'brand'=>'AMD',
            'price'=>'284990',
            'quantity'=>'10',
            'image'=>'images/amd_ryzen9.jpg',
            'frequency'=>'3700Mhz',
            'turbo'=>'4800Mhz',
            'core'=>'12',
            'thread'=>'24',
            'socket'=>'AM4',
            'cache'=>'70MB'
        ]);



    }
}

