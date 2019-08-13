<?php

use App\Models\Ecs_product;
use App\Models\Ecs_product_review;
use App\Models\Ecs_product_view;
use App\Models\Ecs_product_extra;
use App\Models\Ecs_product_comment;
use App\Models\Ecs_cart;
use App\Models\Ecs_product_color;
use App\Models\Ecs_product_img;
use App\Models\Ecs_store_address;
use App\Models\Ecs_product_wishlist;
use App\Models\Ecs_courier;
use App\Models\Ecs_user_address;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function randDate()
    {
        return \Carbon\Carbon::now()
            ->subDays(rand(1, 100))
            ->subHours(rand(1, 23))
            ->subMinutes(rand(1, 60));
    }
    public function run()
    {
        factory(Ecs_product::class, 30)->create();
        factory(Ecs_product_review::class, 100)->create();
        factory(Ecs_product_img::class, 150)->create();
        factory(Ecs_product_extra::class, 150)->create();
        factory(Ecs_product_review::class, 150)->create();      
        factory(Ecs_product_view::class, 150)->create();
        factory(Ecs_product_comment::class, 150)->create();
        factory(Ecs_cart::class, 30)->create();
        factory(Ecs_store_address::class, 30)->create();
        factory(Ecs_user_address::class, 30)->create();
        factory(Ecs_product_wishlist::class, 1000)->create();
    }
}
