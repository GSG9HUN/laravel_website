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
        //RAM

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
            'memory_type'=>'DDR4',
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
            'memory_type'=>'DDR4',
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
            'memory_type'=>'DDR3',
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
            'memory_type'=>'DDR3',
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
            'memory_type'=>'DDR3',
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
            'memory_type'=>'DDR4',
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
            'memory_type'=>'DDR4',
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
            'memory_type'=>'DDr4',
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
            'memory_type'=>'DDR2',
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
            'memory_type'=>'DDR4',
            'capacity'=>'16GB'
        ]);

        //Processors

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

        //Video Cards

        Item::create([
            'name'=>'ASUS Cerberus GeForce® GTX 1050 Ti videókártya, 4GB, GDDR5',
            'category'=>'Video Card',
            'brand'=>'ASUS',
            'price'=>'85290',
            'quantity'=>'10',
            'image'=>'images/asus_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0',
            'series'=>'NVIDIA GeForce GTX 1000',
            'manufacturer'=>'Nvidia',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7008',
            'DisplayPort'=>'1',
            'DVI'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'ASUS GeForce GT1030 videókártya, 2GB',
            'category'=>'Video Card',
            'brand'=>'ASUS',
            'price'=>'39390',
            'quantity'=>'10',
            'image'=>'images/asus_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0 16x',
            'series'=>'GeForce GT 1000',
            'manufacturer'=>'Nvidia',
            'capacity'=>'2GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'6008',
            'DisplayPort'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'Gigabyte GeForce GTX 1650 IX OC Videokártya, 4GB, 128-bit',
            'category'=>'Video Card',
            'brand'=>'Gigabyte',
            'price'=>'113600',
            'quantity'=>'10',
            'image'=>'images/gigabyte_1650.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0 x16',
            'series'=>'GeForce GTX 1600',
            'manufacturer'=>'Nvidia',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7008',
            'DisplayPort'=>'1',
            'HDMI'=>'2',
            ]);
        Item::create([
            'name'=>'Asus Dual GeForce RTX™️ 3070 Videokártya, 8GB GDDR6, 256-bit',
            'category'=>'Video Card',
            'brand'=>'ASUS',
            'price'=>'570000',
            'quantity'=>'10',
            'image'=>'images/asus_dual_rtx_3070.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 4.0',
            'series'=>'RTX 3000',
            'manufacturer'=>'Nvidia',
            'capacity'=>'8GB',
            'memory_type'=>'GDDR6',
            'frequency'=>'14000',
            'DisplayPort'=>'3',
            'HDMI'=>'2',
            ]);
        Item::create([
            'name'=>'ASUS Phoenix GeForce® GTX 1050 Ti videókártya, 4GB GDDR5, 128-bit',
            'category'=>'Video Card',
            'brand'=>'ASUS',
            'price'=>'69990',
            'quantity'=>'10',
            'image'=>'images/asus_phoenix_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0',
            'series'=>'NVIDIA GeForce GTX 1000',
            'manufacturer'=>'Nvidia',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7008',
            'DisplayPort'=>'1',
            'DVI'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'MSI GeForce® GTX 1050 Ti GAMING X videokártya, 4GB GDDR5, 128-bit',
            'category'=>'Video Card',
            'brand'=>'MSI',
            'price'=>'109290',
            'quantity'=>'25',
            'image'=>'images/msi_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'2560 x 1600',
            'slot' =>'PCI Express 3.0',
            'series'=>'NVIDIA GeForce GTX 1000',
            'manufacturer'=>'Nvidia',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7108',
            'DisplayPort'=>'1',
            'DVI'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'MSI Radeon RX 580 Armor OC Videókártya, 8GB DDR5, 256-bit',
            'category'=>'Video Card',
            'brand'=>'MSI',
            'price'=>'268000',
            'quantity'=>'25',
            'image'=>'images/msi_rx_580.jpg',
            'type'=>'gaming',
            'slot' =>'PCI Express 3.0',
            'series'=>'AMD Radeon RX 500',
            'manufacturer'=>'AMD',
            'capacity'=>'8GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'8000',
            'DisplayPort'=>'2',
            'DVI'=>'1',
            'HDMI'=>'2',
            ]);
        Item::create([
            'name'=>'Gigabyte GeForce® GTX 1050 Ti OC Videokártya, 4GB GDDR5, 128-bit',
            'category'=>'Video Card',
            'brand'=>'Gigabyte',
            'price'=>'116000',
            'quantity'=>'12',
            'image'=>'images/gigabyte_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0',
            'series'=>'NVIDIA GeForce GTX 1000',
            'manufacturer'=>'nVIDIA',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7008',
            'DisplayPort'=>'1',
            'DVI'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'Gigabyte GeForce® GTX 1050 Ti D5 videókártya, 4GB GDDR5, 128-bit',
            'category'=>'Video Card',
            'brand'=>'Gigabyte',
            'price'=>'77990',
            'quantity'=>'12',
            'image'=>'images/gigabyte_d5_gtx_1050_ti.jpg',
            'type'=>'gaming',
            'max_resolution'=>'7680 x 4320',
            'slot' =>'PCI Express 3.0',
            'series'=>'NVIDIA GeForce GTX 1000',
            'manufacturer'=>'nVIDIA',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'7008',
            'DisplayPort'=>'1',
            'DVI'=>'1',
            'HDMI'=>'1',
            ]);
        Item::create([
            'name'=>'Gigabyte GeForce GT710 2GB GDDR5 Videókártya',
            'category'=>'Video Card',
            'brand'=>'Gigabyte',
            'price'=>'18770',
            'quantity'=>'5',
            'image'=>'images/gigabyte_gt_gtx_1050_ti.jpg',
            'capacity'=>'4GB',
            'memory_type'=>'GDDR5',
            'frequency'=>'5010'
            ]);

        //Motherboards

        Item::create([
            'name'=>'ASUS PRIME B450M-A alaplap, Socket AM4',
            'category'=>'Motherboard',
            'price'=>'32490',
            'brand'=>'ASUS',
            'image'=>'images/asus_prime.jpg',
            'quantity'=>'12',
            'cpu_slot'=>'AM4',
            'chipset'=>'B450',
            'sup_proc'=>'Ryzen',
            'memory_type'=>'DDR4',
            'capacity'=>'64GB',
            'frequency'=>'3200(O.C.)/3000(O.C.)/2800(O.C.)/2666/2400/2133',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'PCI Express 3.0'
        ]);
        Item::create([
            'name'=>'ASRock B450 Pro4 Alaplap, AMD B450 DDR4 SATA3 M.2 USB3.0 PCIe3.0 AM4 ATX',
            'price'=>'28990',
            'brand'=>'ASRock',
            'image'=>'images/asrock_b450.jpg',
            'quantity'=>'99',
            'cpu_slot'=>'AM4',
            'chipset'=>'AMD Promontory B450',
            'sup_proc'=>'AMD Ryzen 9 / 7 / 5 / 3 / Athlon',
            'memory_type'=>'DDR4',
            'capacity'=>'64GB',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'category'=>'Motherboard',
            'video_slot'=>'PCI Express x16 3.0'
        ]);
        Item::create([
        'name'=>'ASUS AMD ROG STRIX B550-F GAMING(WI-FI) alaplap',
            'category'=>'Motherboard',
        'price'=>'59990',
        'brand'=>'Asus',
        'image'=>'images/asus_amd_rog_strix_B550-F.jpg',
        'quantity'=>'30',
        'cpu_slot'=>'AM4',
        'chipset'=>'AMD B550',
        'sup_proc'=>'3. generációs AMD Ryzen processzorok',
        'memory_type'=>'DDR4',
        'capacity'=>'128GB',
        'frequency'=>'4600(O.C)/4400(O.C)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3600(O.C.)/3466(O.C.)/3200/3000/2800/2666/2400/2133',
        'dual_channel'=>true,
        'memory_slots'=>'4',
        'video_slot'=>'PCI Express x16 4.0'
    ]);
        Item::create([
            'name'=>'MSI MAG B550 TOMAHAWK Alaplap, AM4 Socket',
            'category'=>'Motherboard',
            'price'=>'55990',
            'brand'=>'MSI',
            'image'=>'images/msi_mag.jpg',
            'quantity'=>'53',
            'cpu_slot'=>'AM4',
            'sup_proc'=>'Harmadik generációs AMD Ryzen és a jövőbeli AMD Ryzen processzorok BIOS frissítéssel',
            'chipset'=>'AMD B550',
            'memory_type'=>'DDR4',
            'capacity'=>'128GB',
            'frequency'=>'5100(OC)/ 5000(OC)/ 4866(OC)/ 4800(OC)/ 4600(OC)/ 4533(OC)/ 4400(OC)/ 4300(OC)/ 4266(OC)/ 4200(OC)/ 4133(OC)/ 4000(OC)/ 3866(OC)/ 3733(OC)/ 3600(OC)/ 3466(OC)/ 3400(OC)/ 3333(OC)/ 3300(OC)/ 3200(JEDEC)/ 3000(JEDEC)/ 2933(JEDEC)/ 2666(JEDEC)/ 2400(JEDEC)/ 2133(JEDEC)',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'PCI Express 3.0 x16'
        ]);
        Item::create([
            'name'=>'Gigabyte Z490M alaplap, Socket 1200',
            'category'=>'Motherboard',
            'price'=>'49790',
            'brand'=>'Gigabyte',
            'image'=>'images/gigabyte_z490m.jpg',
            'quantity'=>'20',
            'cpu_slot'=>'1200',
            'chipset'=>'Intel® Z490',
            'sup_proc'=>'Intel® Core ™, Pentium®, Gold és a 10. generációs Celeron®',
            'memory_type'=>'DDR4',
            'capacity'=>'128GB',
            'frequency'=>'3200/2933/2666/2400/2133',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'PCI Express x16 3.0'
        ]);
        Item::create([
            'name'=>'ASRock Fatal1ty B360 GAMING K4 Alaplap, Socket 1151',
            'category'=>'Motherboard',
            'price'=>'40900',
            'brand'=>'ASRock',
            'image'=>'images/asrock_fatal1ty_b360.jpg',
            'quantity'=>'36',
            'cpu_slot'=>'1151',
            'chipset'=>'Intel B360',
            'sup_proc'=>'Intel 9th/8th Generation Core i7/i5/i3/Pentium/Celeron',
            'memory_type'=>'DDR4',
            'capacity'=>'128GB',
            'frequency'=>'2666/2400/2133',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'2 x PCI Express 3.0 x16'
        ]);
        Item::create([
            'name'=>'Gigabyte alaplap am4 b450m gaming AMD b450, matx',
            'category'=>'Motherboard',
            'price'=>'24990',
            'brand'=>'Gigabyte',
            'image'=>'images/gigabyte_b450m.jpg',
            'quantity'=>'6',
            'cpu_slot'=>'AM4',
            'chipset'=>'AMD B350',
            'memory_type'=>'DDR4',
            'capacity'=>'32GB',
            'frequency'=>'2933',
            'dual_channel'=>true,
            'memory_slots'=>'2',
            'video_slot'=>'PCI-Ex16 3.0'
        ]);
        Item::create([
            'name'=>'ASUS Intel ROG MAXIMUS XII EXTREME alaplap, Socket 1200',
            'price'=>'364880',
            'category'=>'Motherboard',
            'brand'=>'Asus',
            'image'=>'images/asus_intel_rog_maximus_XII_extreme.jpg',
            'quantity'=>'3',
            'cpu_slot'=>'1200',
            'chipset'=>'Intel® Z490',
            'sup_proc'=>'Intel® Core ™, Pentium®, Gold és a 10. generációs Celeron®',
            'memory_type'=>'DDR4',
            'capacity'=>'128GB',
            'frequency'=>'4800(O.C.)/4700(O.C)/4600(O.C)/4500(O.C)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3333(O.C.)/3200(O.C.)/3000(O.C.)/2933/2800/2666/2400/2133 MHz Non-ECC, Un-buffered',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'PCI Express 3.0'
        ]);
        Item::create([
            'name'=>'MSI MPG X570 GAMING PLUS Alaplap, AM4 Socket',
            'category'=>'Motherboard',
            'price'=>'59990',
            'brand'=>'MSI',
            'image'=>'images/msi_x570.jpg',
            'quantity'=>'63',
            'cpu_slot'=>'AM4',
            'chipset'=>'AMD X570',
            'sup_proc'=>'3. Generációs AMD Ryzen™ processzorok/ 2. Generációs AMD Ryzen™ processzorok
                         AMD Ryzen™ with Radeon™ Vega Graphics processzorok
                         Második generációs AMD Ryzen a Radeon Graphics',
            'memory_type'=>'DDR4',
            'capacity'=>'128GB',
            'frequency'=>'1866/ 2133/ 2400/ 2667/ 2800/2933 /3000 /3066 /3200 /3466 /3600 /3733 /3866 /4000 /4133 /4266 /4400',
            'dual_channel'=>true,
            'memory_slots'=>'4',
            'video_slot'=>'PCI Express x16 3.0'
        ]);
        Item::create([
            'name'=>'ASUS AMD ROG STRIX TRX40-E GAMING alaplap',
            'category'=>'Motherboard',
            'price'=>'221365',
            'brand'=>'Asus',
            'image'=>'images/asus_amd_rog_strix_trx40-3.jpg',
            'quantity'=>'6',
            'cpu_slot'=>'sTRX4',
            'chipset'=>'TRX40',
            'sup_proc'=>'AMD Ryzen™ Threadripper™ Gen 3',
            'memory_type'=>'DDR4',
            'capacity'=>'256GB',
            'frequency'=>'4666(O.C.)/4600(O.C)/4400(O.C)/4333(O.C.)/4266(O.C.)/4133(O.C.)/3800(O.C.)/3733(O.C.)/3466(O.C.)/3400(O.C.)/3200/2800/2666/2400/2133',
            'dual_channel'=>true,
            'memory_slots'=>'8',
            'video_slot'=>'3x PCI Express 4.0 x16'
        ]);

        //HDD and SSD

        Item::create([]);

    }
}

