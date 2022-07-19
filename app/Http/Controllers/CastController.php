<?php

namespace App\Http\Controllers;

use App\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $casts = new Cast;

        $casts->nama = $request->input('nama');
        $casts->umur = $request->input('umur');
        $casts->bio = $request->input('bio');

        if ($request->hasFile('gambarProduk')) {
            $file = $request->file('gambarProduk');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/casts/', $filename);
            $casts->gambarProduk = $filename;
        }

        $casts->save();
        return redirect('/casts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $casts = Cast::all();
        $casts = Cast::all()->where('id', $id)->first();
        return view('casts.show', compact('casts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $casts = Cast::findOrFail($id);
        return view('casts.edit', compact('casts'));
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
        $casts = Cast::find($id);
        $casts->nama = $request->input('nama');
        $casts->umur = $request->input('umur');
        $casts->bio = $request->input('bio');

        if ($request->hasFile('gambarProduk')) {
            $destination = 'images/casts/'.$casts->gambarProduk;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gambarProduk');
            $filename  = time().'.'.$file->getClientOriginalExtension();
            $file->move('images/casts/', $filename);
            $casts->gambarProduk = $filename;
        }


        $casts->update();
        return redirect('/casts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $casts = Cast::find($id);

        $destination = 'images/casts/' . $casts->gambarProduk;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        Cast::findOrFail($id)->delete();

        return redirect()->back();
    }
}