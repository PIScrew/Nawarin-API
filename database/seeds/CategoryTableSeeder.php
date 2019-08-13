<?php

use App\Models\Ecs_category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
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
        factory(Ecs_category::class, 15)->create();
    }
}
