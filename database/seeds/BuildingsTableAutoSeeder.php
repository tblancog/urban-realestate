<?php

use Illuminate\Database\Seeder;

class BuildingsTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buildings')->delete();
        
        \DB::table('buildings')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Mariano Acha 333',
                'slug' => 'mariano-acha-333',
                'address' => 'Mariano Acha 333',
                'url_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.51478858136!2d-58.48497878449917!3d-34.56583868046937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68a9b91f713%3A0x8fbe46e8db4ab1d5!2sMariano+Acha%2C+Buenos+Aires!5e0!3m2!1sen!2sar!4v1563454071788!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'from_price' => '1',
                'price' => '169000',
                'description' => '- PH de categoría con cochera y amenities varios: 
- piscina/ solárium 
- parrilla 
- sum 
– terraza 
– cocheras
Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos de porcelanato; grifería con cierre cerámico hidromet o similar;
interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de conductos para split y spar.
-Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
-Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
- Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
con deck.',
                'status' => 'En obra',
                'is_featured' => '1',
                'contact_name' => 'María',
                'contact_phone' => '549 1153294260',
                'created_at' => '2019-07-18 09:55:22',
                'updated_at' => '2019-07-18 10:39:36',
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Edificio G 3051',
                'slug' => 'edificio-g-3051',
                'address' => 'Galvan 3051',
                'url_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.45434430227!2d-58.489131484499055!3d-34.56736858046901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6f55c9a4cbb%3A0x910191cd7ab1ace!2sGalv%C3%A1n+3051%2C+C1431FVD+CABA!5e0!3m2!1sen!2sar!4v1563457220881!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'from_price' => '1',
                'price' => '169000',
                'description' => 'Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión. El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete niveles y un primer retiro con viviendas más otro con espacios comunes y amenities. Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y toilette de recepción y al contra frente dieciséis unidades monoambientes. En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión aterrazada con parilla común. En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos. con deck.',
                'status' => 'En Obra',
                'is_featured' => '1',
                'contact_name' => 'María',
                'contact_phone' => '1153294260',
                'created_at' => '2019-07-18 10:43:52',
                'updated_at' => '2019-07-26 19:13:29',
            ),
        ));
        
        
    }
}