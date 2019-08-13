<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends BaseController
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
        $data = Product::all();
        return response($data);
    }

    public function productShow($id){
        $data = Product::where('id',$id)->get();
        return response ($data);
    }
}