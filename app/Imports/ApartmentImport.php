<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ApartmentImport implements ToCollection, WithHeadingRow {

    public function collection(Collection $rows)
    {
        $total = $rows->count();
        $arr = $rows->filter( function($a) {
                        return  !empty($a->get('titulo'));
                    })
                    ->map(function($a, $index) use ($total) {
                        if($index > $total || empty($a->get('titulo') ))  return null;
                        return [
                            'title'=> $a->get('titulo'),
                            'slug'=> str_slug($a->get('titulo')),
                            "floor"=> $a->get("piso"),
                            "department"=> $a->get("depto"),
                            "code"=> $a->get("code"),
                            "rooms"=> $a->get("ambientes"),

                            // Info básica
                            "dormitorios"=> $a->get("dormitorios"),
                            "banios"=> $a->get("banos"),
                            "toilettes"=> $a->get("toilettes"),
                            "antiguedad"=> $a->get("antiguedad"),
                            "expensas"=> $a->get("expensas"),
                            "disposicion"=> $a->get("disposicion"),
                            "orientacion"=> $a->get("orientacion"),
                            'price'=> $a->get('precio'),
                            'description'=> $a->get('descripcion'),
                            'status'=> $a->get('estado'),

                            // Area
                            "area"=> $a->get("superficie_total"),
                            "area_semicubierta"=> $a->get("area_semicubierta"),
                            "area_total_construido"=> $a->get("area_total"),
                            "price"=> $a->get('precio'),

                            "contact_name"=> $a->get("contacto"),
                            "contact_phone"=> $a->get("telefono"),
                        ];
                    });

        \DB::table('apartments')->insert($arr->toArray());
    }
    public function headingRow(): int
    {
        return 1;
    }
}
