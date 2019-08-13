<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends BaseController
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
        $data = Post::all();
        return response($data);
    }

    public function userIndex($id){
        $data = Product::where('id',$id)->get();
        return response ($data);
    }
}