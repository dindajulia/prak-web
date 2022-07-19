<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //nampilin semua data
    {
        $pet = Pet::all();
        return view('/show', ['pet'=>$pet]);
    }

    public function showcontentindex()
    {
        $pet = Pet::all();
        return view('homes', ['pet'=>$pet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('show');
    // }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama'=>'required',
            'jumlah'=>'required',
            'jenis' => 'required',
            'foto' => 'required'
            
    	]);
 
        Pet::create([
    		'nama' => $request->nama,
            'jumlah' => $request->jumlah,
    		'foto' => $request->foto,
    		'jenis' => $request->jenis,

    	]);
 
    	return redirect('show');
    }

    public function delete($id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect('show');
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
        $pet = Pet::find($id);
    return view('edit', ['pet' => $pet]);
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
        $this->validate($request,[
    		'nama'=>'required',
            'jumlah'=>'required',
            'jenis' => 'required',
            'foto' => 'required'
            
    	]);
 
       $pet = Pet::find($id);
       $pet->nama = $request->nama;
       $pet->jumlah = $request->jumlah;
       $pet->foto = $request->foto ;
            $pet ->save();
            return redirect('show');
            
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

    
}