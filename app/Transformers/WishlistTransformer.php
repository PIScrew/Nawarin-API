<?php

namespace App\Transformers;

use App\Models\Ecs_product;
use App\Models\Ecs_product_wishlist;
use App\Models\Ecs_product_user;
use League\Fractal\TransformerAbstract;

class WishlistTransformer extends TransformerAbstract
{
    
    public function transform(Ecs_product_wishlist $wish)
    {
        // return $user->attributesToArray();

        $formattedUser = [
            'id_product'                       => $wish->id,
            'nama_produk'                      => $wish->title_product,
            'username'                         => $wish->username,
        ];
        return $formattedUser;
    }

}
