<?php

namespace App\Http\Controllers;

use App\Models\DataCare;
use Illuminate\Http\Request;

class DataCareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataCare::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $care = new DataCare();
        $care->care = $request->care;
        $care->harga = $request->harga;
        $care->save();
        
        return "data berhasil ditambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataCare  $dataCare
     * @return \Illuminate\Http\Response
     */
    public function show(DataCare $dataCare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataCare  $dataCare
     * @return \Illuminate\Http\Response
     */
    public function edit(DataCare $dataCare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataCare  $dataCare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $care = $request->care;
        $harga = $request->harga;

        $perawatan = DataCare::find($id);
        $perawatan->care = $care;
        $perawatan->harga = $harga;
        $perawatan->save();

        return "data ter Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataCare  $dataCare
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $care = DataCare::find($id);
        $care->delete();
    }
}
