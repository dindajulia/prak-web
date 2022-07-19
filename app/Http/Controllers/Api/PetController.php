<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Http\Resources\PetResource;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet = Pet::all();
        return response([
            'total' => $pet->count(),
            'messages'=>'Retrived successfuly',
            'data'=> PetResource::collection($pet)
        ],200);
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
            'nama'=>'required|max:100',
            'jumlah'=>'required|numeric',
            'jenis' => 'required|max:100',
            'foto' => 'required|max:100'
        ]);
        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validation Error'
            ]);
        }
        $pet = Pet::create($request->all());
        return response(['data'=>new PetResource($pet),'message'
        =>'Data has been created!'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);
        if($pet != null){
            return response(['data'=> new PetResource($pet),
            'message'=>'Retrieved successfully'],200);
        }else{
            return response([
                'message'=>'No data found',
            ],403);
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
            'jumlah'=>'required|numeric',
            'jenis' => 'required|max:100',
            'foto' => 'required|max:100'
        ]);
        if($validator->fails()){
            return response([
                'error'=>$validator->errors(),
                'status'=>'Validation Error'
            ]);
        }
        $pet = Pet::find($id);
        if($pet !=null){
            $pet->update($request->all());
            return response(['data'=> new PetResource($pet), 'message'
            =>'Data has been updated!'],202);
        }else{
            return response(['message'=>'No dara found!',
        ],403);
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
        $pet = Pet::find($id);
        if($pet !=null){
            $pet->delete();
            return response(['message'=>'pet has been deleted!']);
        }else{
            return response([
                'message'=>'No data found!',
            ],403);
        }
    }
}