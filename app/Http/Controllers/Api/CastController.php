<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cast;
use App\Http\Resources\CastResource;
use Illuminate\Support\Facades\Validator;

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
        return response()->json([
            'total'=>$casts->count(),
            'message'=>'Retrivied successufy',
            'data'=>CastResource::collection($casts)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'nama' => 'required|max:100',
            'umur' => 'required|max:100', 
            'bio' => 'required|max:1000', 
            'gambarProduk' => 'required|numeric'

        ]);

        if($validator->fails()){
            return response([
                'error'=>$validator->error(),
                'status'=>'Validator errror'
            ]);
        }

        $casts = Cast::create($request->all());
        return response([
            'data'=>new CastResource($casts), 
            'message'=>'Article has been ccreated'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $casts = Cast::find($id);
        if($casts!=null){
            return response([
                'Article'=>new CastResource($casts),
                'message'=>'Retrived data success'
            ]);
        }else{
            return response([
                'message'=>'No data found',
            ], 401);
        }
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
        $validator = Validator::make($request->all(),[

            'nama'=>'required|max:100',
            'umur'=>'required|max:100', 
            'bio'=> 'required|max:1000', 
            'ganbarProduk'=>'required|numeric'

        ]);

        if($validator->fails()){
            return response([
                'error'=>$validator->error(),
                'status'=>'Validator errror'
            ]);
        }

        $casts = Cast::find($id);
        if($casts!=null){
            $casts->update($request->all());
            return response([
                'Article'=>new CastResource($casts),
                'message'=>'Data has been updated'
            ]);
        }else{
            return response([
                'message'=>'No data found',
            ], 403);
        }
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
        if($casts!=null){
            $casts->delete();
            return response([
                'status'=>'Berita berhasil didelete'
            ]);
        }else{
            return response([
                'status'=>'No data found'
            ], 403);
        }
    }
}