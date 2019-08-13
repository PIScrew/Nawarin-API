<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = User::all();
        return response($data);
    }

    public function userShow($id){
        $data = User::where('id',$id)->get();
        return response ($data);
    }

    public function store (Request $request){
        $data = new User();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Berhasil Tambah Data');
    }

    public function update(Request $request, $id){
        $data = User::where('id',$id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroy($id){
        $data = User::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }
}