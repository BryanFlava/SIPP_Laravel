<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use Illuminate\Database\Eloquent\Model;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pelamar::all();
        return view('pelamar.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pelamar;
        return view('pelamar.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Pelamar;
        $model->nama = $request->nama;
        $model->no_ktp = $request->no_ktp;
        $model->email = $request->email;
        $model->no_hp = $request->no_hp;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->alamat = $request->alamat;
        $model->pendidikan = $request->pendidikan;
        $model->save();

        return redirect('pelamar');
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
        $model = Pelamar::find($id);
        return view('pelamar.edit', compact(
            'model'
        ));
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
        $model = Pelamar::find($id);
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->no_hp = $request->no_hp;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->alamat = $request->alamat;
        $model->pendidikan = $request->pendidikan;
        $model->save();

        return redirect('pelamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pelamar::find($id);
        $model->delete();
        return redirect('pelamar');
    }
}
