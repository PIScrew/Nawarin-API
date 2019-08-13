<?php

namespace App\Transformers;

use App\Models\Ecs_product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    
    public function transform(Ecs_product $product)
    {
        // return $user->attributesToArray();

        $formattedUser = [
            'id'                    => $product->id,
            'nama_product'                  => $product->title_product,
        ];
        return $formattedUser;
    }

}
