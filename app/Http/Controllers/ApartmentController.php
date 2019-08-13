<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use League\Csv\Reader;


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
}
