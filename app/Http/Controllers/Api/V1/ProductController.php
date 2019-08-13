<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Ecs_product;
use Illuminate\Http\Request;
use App\Transformers\ProductTransformer;
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
        $data = Ecs_product::paginate(10);
        return $this->response->paginator($data, new ProductTransformer());
    }

    public function productShow($id){
      
        $data = Ecs_product::findOrfail(['id' => $id]);
        return $this->response->item($data, new ProductTransformer());
    }
}