<?php

namespace App\Transformers;

use App\Models\Ecs_category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    
    public function transform(Ecs_category $categori)
    {
        // return $user->attributesToArray();

        $formattedUser = [
            'id'                    => $categori->id,
            'nama_product'          => $categori->name,
            'slug'                  => $categori->slug,
        ];
        return $formattedUser;
    }

}
