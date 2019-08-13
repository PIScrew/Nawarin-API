<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Ecs_category;
use Illuminate\Http\Request;
use App\Transformers\CategoryTransformer;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends BaseController
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
        $data = Ecs_category::paginate(10);
        return $this->response->paginator($data, new CategoryTransformer());
    }

    public function categoriShow($id){
      
        $data = Ecs_category::findOrfail(['id' => $id]);
        return $this->response->item($data, new CategoryTransformer());
    }
}