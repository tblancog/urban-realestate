<?php

use Illuminate\Database\Seeder;
use App\Amenity;
// use App\Building;
class AmenityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [ 'title'=> 'cochera', 'icon'=> 'amen_02.png'],
        [ 'title'=> 'piscina', 'icon'=> 'amen_03.png'],
        [ 'title'=> 'gimnasio', 'icon'=> 'amen_08.png'],
        [ 'title'=> 'sum', 'icon'=> 'amen_01.png'],
        [ 'title'=> 'parrilla', 'icon'=> 'amen_05.png'],
        [ 'title'=> 'ascensor', 'icon'=> 'amen_07.png'],

        ['title'=> 'Aire acondicionado Individual', 'icon'=> 'amen_02.png'],
        ['title'=> 'Apto mascotas', 'icon'=> 'amen_02.png'],
        ['title'=> 'Calefaccción Individual', 'icon'=> 'amen_02.png'],
        ['title'=> 'Cochera subterránea', 'icon'=> 'amen_02.png'],
        ['title'=> 'Hidromasaje', 'icon'=> 'amen_02.png'],
        ['title'=> 'Parrilla', 'icon'=> 'amen_02.png'],
        ['title'=> 'Quincho', 'icon'=> 'amen_02.png'],
        ['title'=> 'Sala de juegos', 'icon'=> 'amen_02.png'],
        ['title'=> 'Seguridad diurna', 'icon'=> 'amen_02.png'],

        ['title'=> 'Apto profesional', 'icon'=> 'amen_02.png'],
        ['title'=> 'Calefacción por Aire', 'icon'=> 'amen_02.png'],
        ['title'=> 'Deck', 'icon'=> 'amen_02.png'],
        ['title'=> 'Lavadero', 'icon'=> 'amen_02.png'],
        ['title'=> 'Perimetral', 'icon'=> 'amen_02.png'],
        ['title'=> 'Riego automático', 'icon'=> 'amen_02.png'],
        ['title'=> 'Sauna', 'icon'=> 'amen_02.png'],
        ['title'=> 'Seguridad portería', 'icon'=> 'amen_02.png'],

        ['title'=> 'Amoblado', 'icon'=> 'amen_02.png'],
        ['title'=> 'Calefacción', 'icon'=> 'amen_02.png'],
        ['title'=> 'Calefacción por radiadores', 'icon'=> 'amen_02.png'],
        ['title'=> 'En construcción', 'icon'=> 'amen_02.png'],
        ['title'=> 'Lote interno', 'icon'=> 'amen_02.png'],
        ['title'=> 'Piscina', 'icon'=> 'amen_02.png'],
        ['title'=> 'Ruta', 'icon'=> 'amen_02.png'],
        ['title'=> 'Seguridad', 'icon'=> 'amen_02.png'],
        ['title'=> 'Solarium', 'icon'=> 'amen_02.png'],
        
        ['title'=> 'Apto crédito', 'icon'=> 'amen_02.png'],
        ['title'=> 'Calefacción central', 'icon'=> 'amen_02.png'],
        ['title'=> 'Centro de deportes', 'icon'=> 'amen_02.png'],
        ['title'=> 'Gimnasio', 'icon'=> 'amen_02.png'],
        ['title'=> 'Luminoso', 'icon'=> 'amen_02.png'],
        ['title'=> 'Preinstalación de A/A', 'icon'=> 'amen_02.png'],
        ['title'=> 'SUM', 'icon'=> 'amen_02.png'],
        ['title'=> 'Seguridad 24hs', 'icon'=> 'amen_02.png'],
      ];

      Amenity::insert($data);

    }
}
