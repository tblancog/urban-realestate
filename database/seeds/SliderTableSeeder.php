<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [ 'index' => 0, 'title'=> 'EDIFICIO PH UH5', 'subtitle'=> 'Una oportunidad para disfrutar de un edificio en una zona estratégica', 'filename'=> 'slide_0.jpeg'],
        [ 'index' => 1, 'title'=> 'EDIFICIO PH UH5', 'subtitle'=> 'Moderno y funcional con terraza y parrilla propia. ¡Vení a conocerlo!', 'filename'=> 'slide_1.jpeg'],
        [ 'index' => 2, 'title'=> 'EDIFICIO PH UH5', 'subtitle'=> 'Estética y confort en cada detalle. Ameneties para disfrutar en familia y con amigos', 'filename'=> 'slide_2.jpeg'],
      ];

      collect($data)->each(function($el){
        Slider::create($el);
      });
    }
}
