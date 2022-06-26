<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class AdminLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = DB::table('databansos')
            ->join('jenisbansos', 'databansos.jenisbansos_id', '=', 'jenisbansos.id')
            ->join('users', 'databansos.id', '=', 'users.databansos_id')
            ->join('validasi_data', 'databansos.id', '=', 'validasi_data.databansos_id')
            ->select('databansos.nik', 'databansos.nama_lengkap', 'jenisbansos.nama_bansos', 'validasi_data.proses')
            ->get();
        return view('admin.laporan-bansos', ['laporan' => $laporan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak_pdf()
    {
        $laporan = DB::table('databansos')
            ->join('jenisbansos', 'databansos.jenisbansos_id', '=', 'jenisbansos.id')
            ->join('users', 'databansos.id', '=', 'users.databansos_id')
            ->join('validasi_data', 'databansos.id', '=', 'validasi_data.databansos_id')
            ->select('databansos.nik', 'databansos.nama_lengkap', 'jenisbansos.nama_bansos', 'validasi_data.proses')
            ->get();

        $pdf = PDF::loadview('admin.cetak-bansos', ['laporan' => $laporan]);
        return $pdf->stream();
    }
}