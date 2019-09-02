<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use League\Csv\Reader;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApartmentInquiry;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ApartmentImport;


class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::latest()->paginate(5);
        return view('index', compact('apartments'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
      return view('apartment.show', compact('apartment'));
    }

    public function batchUpload(Request $request) {
        $file = $request->file('file');
        //load the CSV document from a file path
        $csv = Reader::createFromStream(fopen($file, 'r+'));
        $csv->setHeaderOffset(0);

        $header = $csv->getHeader(); //returns the CSV header record
        $records = $csv->getRecords(); //returns all the CSV records as an Iterator object

        foreach ($records as $offset => $record) {
            dump($offset);
            dump($record);
            //$offset : represents the record offset
            //var_export($record) returns something like
            // array(
            //  'john',
            //  'doe',
            //  'john.doe@example.com'
            // );
            //
        }
    }

    public function mail(Request $request, Apartment $apartment) {

        $user = collect($request->except('_token'));
        Mail::to( 'info@urbanrealestate.com.ar', 'Info')
              ->send(new ApartmentInquiry($apartment, $user));

        return back()->with('success', 'Gracias por contactarte con nostros, respondemos a la brevedad');
    }

    public function import(Request $request, ApartmentImport $importer) {
        Excel::import($importer, $request->file('file'));
    }
}
