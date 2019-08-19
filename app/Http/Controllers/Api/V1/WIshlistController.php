<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Ecs_product;
use App\Models\Ecs_product_wishlist;
use Illuminate\Http\Request;
use App\Transformers\WishlistTransformer;
use Symfony\Component\HttpFoundation\Response;

class WishlistController extends BaseController
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
        $data = Ecs_product_wishlist::paginate(10);
        return $this->response->paginator($data, new WishlistTransformer());
    }

    public function wishlistShow($id){
      
        $data = Ecs_product_wishlist::findOrfail(['id' => $id]);
        return $this->response->item($data, new WishlistTransformer());
    }

    public function wishlistAdd(Request $request){
      
        $data = new Ecs_product_wishlist();
        $data->id_product = $request->input('id_product');
        $data->id_user = $request->input('id_user');
        $data->save();
    
        return response('Succes Add Wishlist');
    }

    public function wishlistDestroy($id){
      
        $data = Ecs_product_wishlist::where('id',$id)->first();
        $data->delete();
        return response('Wishlist Terhapus');
    }

}