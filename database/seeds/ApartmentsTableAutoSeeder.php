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
                'address' => 'Villa Urquiza',
                'location' => 'Villa Urquiza',
                'floor' => '1',
                'department' => '1',
                'code' => '2',
                'url_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.51478858136!2d-58.4849787844992!3d-34.56583868046937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68a9b91f713%3A0x8fbe46e8db4ab1d5!2sMariano+Acha%2C+Buenos+Aires!5e0!3m2!1sen!2sar!4v1563261468477!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
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
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Monoambiente',
                'slug' => 'monoambiente',
                'address' => 'Galvan 3051',
                'location' => 'Belgrano R',
                'floor' => '1',
                'department' => '2',
                'code' => '2',
                'url_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.51478858136!2d-58.4849787844992!3d-34.56583868046937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68a9b91f713%3A0x8fbe46e8db4ab1d5!2sMariano+Acha%2C+Buenos+Aires!5e0!3m2!1sen!2sar!4v1563261468477!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'price' => '111250',
                'area' => '40',
                'rooms' => '1',
                'description' => '- PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum – terraza – cocheras Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar; interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar. -Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso. -Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso. - Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza con deck.',
                'status' => 'alquiler',
                'contact_name' => 'Maria',
                'contact_phone' => '1153294260',
                'building_id' => '2',
                'created_at' => '2019-07-18 10:55:42',
                'updated_at' => '2019-07-18 10:55:42',
            ),
            2 => 
            array (
                'id' => '3',
                'title' => '2 Ambientes',
                'slug' => '2-ambientes',
                'address' => 'Galvan 3051',
                'location' => 'Belgrano R',
                'floor' => '1',
                'department' => '2',
                'code' => '2',
                'url_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.51478858136!2d-58.4849787844992!3d-34.56583868046937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68a9b91f713%3A0x8fbe46e8db4ab1d5!2sMariano+Acha%2C+Buenos+Aires!5e0!3m2!1sen!2sar!4v1563261468477!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
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
            ),
        ));
        
        
    }
}