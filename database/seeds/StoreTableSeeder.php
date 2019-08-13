<?php

use App\Models\Ecs_store;
use App\Models\Ecs_user;
use App\Models\Ecs_message;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ecs_store::class, 15)->create();
        factory(Ecs_message::class, 100)->create();
        
    }
}
