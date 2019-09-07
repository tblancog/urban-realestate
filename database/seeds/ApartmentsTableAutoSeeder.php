<?php

use Illuminate\Database\Seeder;

class ApartmentsTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apartments')->delete();
        
        \DB::table('apartments')->insert(array (
            0 => 
            array (
                'id' => '4',
                'title' => 'Edificio G 3051 - 3 Ambientes',
                'slug' => 'edificio-g-3051-3-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '215250',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '76',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:15:08',
                'updated_at' => '2019-08-20 14:20:11',
                'code' => 'A',
            ),
            1 => 
            array (
                'id' => '5',
                'title' => 'Edificio G 3051 - 3 Ambientes',
                'slug' => 'edificio-g-3051-3-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '222860',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '76',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:16:29',
                'updated_at' => '2019-08-20 14:18:08',
                'code' => 'A',
            ),
            2 => 
            array (
                'id' => '6',
                'title' => 'Edificio G 3051 - 1 Ambiente',
                'slug' => 'edificio-g-3051-1-ambiente',
                'floor' => '2',
                'department' => NULL,
                'price' => '95940',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '37',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:24:30',
                'updated_at' => '2019-08-20 14:28:26',
                'code' => 'A',
            ),
            3 => 
            array (
                'id' => '7',
                'title' => 'Edificio G 3051 - 1 Ambiente',
                'slug' => 'edificio-g-3051-1-ambiente',
                'floor' => '1',
                'department' => NULL,
                'price' => '92250',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '37',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:25:28',
                'updated_at' => '2019-08-20 14:25:28',
                'code' => 'A',
            ),
            4 => 
            array (
                'id' => '8',
                'title' => 'Edificio G 3051 - 1 Ambiente',
                'slug' => 'edificio-g-3051-1-ambiente',
                'floor' => '3',
                'department' => NULL,
                'price' => '95940',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '37',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:25:38',
                'updated_at' => '2019-08-20 14:31:45',
                'code' => 'A',
            ),
            5 => 
            array (
                'id' => '9',
                'title' => 'Edificio G 3051 - 1 Ambiente',
                'slug' => 'edificio-g-3051-1-ambiente',
                'floor' => '6',
                'department' => NULL,
                'price' => '99630',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '37',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:25:58',
                'updated_at' => '2019-08-20 14:34:13',
                'code' => 'A',
            ),
            6 => 
            array (
                'id' => '10',
                'title' => 'Edificio G 3051 - 3 Ambientes',
                'slug' => 'edificio-g-3051-3-ambientes',
                'floor' => '3',
                'department' => NULL,
                'price' => '222860',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '76',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:34:41',
                'updated_at' => '2019-08-20 14:36:47',
                'code' => 'A',
            ),
            7 => 
            array (
                'id' => '11',
                'title' => 'Edificio G 3051 - 3 Ambientes',
                'slug' => 'edificio-g-3051-3-ambientes',
                'floor' => '6',
                'department' => NULL,
                'price' => '233470',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '76',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:37:58',
                'updated_at' => '2019-08-20 14:39:14',
                'code' => 'A',
            ),
            8 => 
            array (
                'id' => '12',
                'title' => 'Edificio G 3051 - 2 Ambientes',
                'slug' => 'edificio-g-3051-2-ambientes',
                'floor' => '8',
                'department' => NULL,
                'price' => '213000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '66',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:41:06',
                'updated_at' => '2019-08-20 14:43:29',
                'code' => 'A',
            ),
            9 => 
            array (
                'id' => '13',
                'title' => 'Edificio G 3051-1 Amb. Modular',
                'slug' => 'edificio-g-3051-1-amb-modular',
                'floor' => '2',
                'department' => NULL,
                'price' => '115700',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '45',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:46:01',
                'updated_at' => '2019-08-25 18:24:16',
                'code' => 'A',
            ),
            10 => 
            array (
                'id' => '14',
                'title' => 'Edificio G 3051 - 1 Ambiente Modular',
                'slug' => 'edificio-g-3051-1-ambiente-modular',
                'floor' => '2',
                'department' => NULL,
                'price' => '115700',
                'rooms' => '1',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '45',
                'area_semicubierta' => NULL,
                'area_total_construido' => NULL,
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. 
Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.',
                'status' => 'En_obra',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-08-20 14:49:41',
                'updated_at' => '2019-08-20 14:51:07',
                'code' => 'A',
            ),
            11 => 
            array (
                'id' => '17',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '3',
                'department' => NULL,
                'price' => '174000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-08-20 15:00:01',
                'updated_at' => '2019-09-02 14:45:46',
                'code' => 'B',
            ),
            12 => 
            array (
                'id' => '18',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '1',
                'department' => NULL,
                'price' => '250000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '7',
                'area_total_construido' => '76',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-08-20 15:01:46',
                'updated_at' => '2019-09-03 23:34:32',
                'code' => 'D',
            ),
            13 => 
            array (
                'id' => '35',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '252000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '7',
                'area_total_construido' => '76',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:36:50',
                'updated_at' => '2019-09-02 14:38:35',
                'code' => 'A',
            ),
            14 => 
            array (
                'id' => '36',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '3',
                'department' => NULL,
                'price' => '256000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '7',
                'area_total_construido' => '76',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:39:00',
                'updated_at' => '2019-09-02 14:39:37',
                'code' => 'A',
            ),
            15 => 
            array (
                'id' => '37',
                'title' => 'Edificio UH5 - 3 amb con terraza',
                'slug' => 'edificio-uh5-3-amb-con-terraza',
                'floor' => '4',
                'department' => NULL,
                'price' => '310000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '69',
                'area_total_construido' => '138',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:40:53',
                'updated_at' => '2019-09-02 14:43:53',
                'code' => 'A',
            ),
            16 => 
            array (
                'id' => '38',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '172000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:46:02',
                'updated_at' => '2019-09-02 14:48:23',
                'code' => 'B',
            ),
            17 => 
            array (
                'id' => '39',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '1',
                'department' => NULL,
                'price' => '169000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:48:37',
                'updated_at' => '2019-09-02 14:49:53',
                'code' => 'B',
            ),
            18 => 
            array (
                'id' => '40',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '1',
                'department' => NULL,
                'price' => '169000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:56:03',
                'updated_at' => '2019-09-02 14:57:06',
                'code' => 'C',
            ),
            19 => 
            array (
                'id' => '41',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '172000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:57:21',
                'updated_at' => '2019-09-02 14:58:02',
                'code' => 'C',
            ),
            20 => 
            array (
                'id' => '42',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '3',
                'department' => NULL,
                'price' => '174000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-02 14:58:17',
                'updated_at' => '2019-09-03 11:25:47',
                'code' => 'C',
            ),
            21 => 
            array (
                'id' => '43',
                'title' => 'Edificio UH5 - 2 ambientes',
                'slug' => 'edificio-uh5-2-ambientes',
                'floor' => '3',
                'department' => NULL,
                'price' => '174000',
                'rooms' => '2',
                'dormitorios' => '1',
                'banios' => '1',
                'toilettes' => '0',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Contrafrente',
                'area' => '44',
                'area_semicubierta' => '5',
                'area_total_construido' => '49',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-03 11:41:54',
                'updated_at' => '2019-09-03 11:45:10',
                'code' => 'G',
            ),
            22 => 
            array (
                'id' => '44',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '1',
                'department' => NULL,
                'price' => '250000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '7',
                'area_total_construido' => '76',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-03 23:26:17',
                'updated_at' => '2019-09-03 23:29:32',
                'code' => 'D',
            ),
            23 => 
            array (
                'id' => '45',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '2',
                'department' => NULL,
                'price' => '255000',
                'rooms' => '3',
                'dormitorios' => '2',
                'banios' => '1',
                'toilettes' => '1',
                'antiguedad' => '0',
                'expensas' => '0',
                'orientacion' => 'Norte',
                'disposicion' => 'Frente',
                'area' => '69',
                'area_semicubierta' => '7',
                'area_total_construido' => '76',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
- terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En_venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-09-03 23:31:22',
                'updated_at' => '2019-09-03 23:33:21',
                'code' => 'D',
            ),
        ));
        
        
    }
}