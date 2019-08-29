<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Ecs_product;
use App\Models\Ecs_product_img;
use App\Models\Ecs_product_comment;
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

    public function storeProduct(Request $request){
        
        $data = new Ecs_product();
        $data->id = $request->input('id');
        $data->id_user = $request->input('id_user');
        $data->id_store = $request->input('id_store');
        $data->id_categories = $request->input('id_categories');
        $data->id_storefront = $request->input('id_storefront');
        $data->title_product = $request->input('title_product');
        $data->slug_product = $request->input('slug_product');
        $data->basic_price = $request->input('basic_price');
        $data->market_price = $request->input('market_price');
        $data->selling_price = $request->input('selling_price');
        $data->weight = $request->input('weight');
        $data->length = $request->input('length');
        $data->width = $request->input('width');
        $data->height = $request->input('height');
        $data->description = $request->input('description');
        $data->id_measurement = $request->input('id_measurement');
        $data->status = $request->input('status');
        $data->type_product = $request->input('type_product');
        $data->is_ban = $request->input('is_ban');
        $data->save();
    
        return response('Succes Add Product');
    }

    public function listComment(){
        $comment = Ecs_product_comment::all();
        return response($comment);
    }

    public function storeComment(Request $request){
        
        $comment = new Ecs_product_comment();
        $comment->id_product = $request->input('id_product');
        $comment->id_user = $request->input('id_user');
        $comment->content = $request->input('content');
        $comment->save();
    
        return response('Succes Add Comment');
    }

    public function updateComment(Request $request, $id){
       
        $comment = Ecs_product_comment::find($id);
        //$comment->id_product = $request->input('id_product');
        //$comment->id_user = $request->input('id_user');
        $comment->content = $request->input('content');
        $comment->save();
 
        return response()->json($comment);
    }

    public function deleteComment($id){
        $data = Ecs_product_comment::where('id',$id)->first();
        $data->delete();
        return response('Comment Deleted');
    }

}