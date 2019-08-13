<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call('RoleTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('MeasurementTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('StoreTableSeeder'); 
        $this->call('ProductTableSeeder');
        Model::reguard();
    }
}
