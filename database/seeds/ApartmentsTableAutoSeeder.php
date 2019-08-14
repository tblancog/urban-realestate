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
                'id' => '1',
                'title' => 'PH UH5',
                'slug' => 'ph-uh5',
                'floor' => '1',
                'department' => '1',
                'price' => '12',
                'area' => '45',
                'rooms' => '3',
                'description' => '- PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum – terraza – cocheras Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar; interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar. -Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso. -Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso. - Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza con deck.',
                'status' => 'reservado',
                'contact_name' => 'María',
                'contact_phone' => '1153294260',
                'building_id' => '1',
                'created_at' => '2019-07-18 10:49:44',
                'updated_at' => '2019-07-18 10:49:44',
                'code' => '2',
            ),
            1 =>
            array (
                'id' => '2',
                'title' => 'Monoambiente',
                'slug' => 'monoambiente',
                'floor' => '1',
                'department' => '2',
                'price' => '111250',
                'area' => '40',
                'rooms' => '1',
                'description' => '- PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum – terraza – cocheras Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar; interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar. -Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso. -Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso. - Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza con deck.',
                'status' => 'reservado',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-07-18 10:55:42',
                'updated_at' => '2019-08-04 21:23:33',
                'code' => '2',
            ),
            2 =>
            array (
                'id' => '3',
                'title' => '2 Ambientes',
                'slug' => '2-ambientes',
                'floor' => '1',
                'department' => '2',
                'price' => '213080',
                'area' => '45',
                'rooms' => '2',
                'description' => '- PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum – terraza – cocheras Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar; interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar. -Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso. -Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso. - Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza con deck.',
                'status' => 'Venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-07-18 11:00:36',
                'updated_at' => '2019-07-29 00:18:15',
                'code' => '2',
            ),
            3 =>
            array (
                'id' => '4',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '1',
                'department' => 'A',
                'price' => '248000',
                'area' => '76',
                'rooms' => '3',
                'description' => 'Excelente departamento, amplio y luminoso.
Cocina cómoda integrada por barra al comedor - living con balcón y vista a la piscina. Cuenta con 2 dormitorios con placards, 1 baño y 1 toilette de recepción. También posee cochera cubierta.',
                'status' => 'En Venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '21',
                'created_at' => '2019-08-08 10:32:30',
                'updated_at' => '2019-08-08 13:46:36',
                'code' => NULL,
            ),
            4 =>
            array (
                'id' => '5',
                'title' => 'Edificio UH5 - 3 ambientes',
                'slug' => 'edificio-uh5-3-ambientes',
                'floor' => '1',
                'department' => 'A',
                'price' => '248000',
                'area' => '76',
                'rooms' => '3',
                'description' => 'Excelente departamento, amplio y luminoso.
Cocina cómoda integrada por barra al comedor - living con balcón y vista a la piscina. Cuenta con 2 dormitorios con placards, 1 baño y 1 toilette de recepción. También posee cochera cubierta.',
                'status' => 'En venta',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '21',
                'created_at' => '2019-08-08 10:33:22',
                'updated_at' => '2019-08-08 10:33:22',
                'code' => NULL,
            ),
        ));


    }
}
