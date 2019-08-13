<?php

use App\Models\Ecs_user_role;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
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
        $data = [];
        array_push($data, [
            'name'                  => 'Superadmin',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'name'                  => 'Admin',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'name'                  => 'Karyawan',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'name'                  => 'Pemilik Toko',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'name'                  => 'Reseller',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'name'                  => 'member',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);

        Ecs_user_role::insert($data);
    }
}
