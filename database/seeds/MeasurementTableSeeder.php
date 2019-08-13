<?php

use App\Models\Ecs_measurement;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MeasurementTableSeeder extends Seeder
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
            'title'       => 'Buah',
            'type'        =>'',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Biji',
            'type'        =>'',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Batang',
            'type'        =>'',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Potong',
            'type'        =>'',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Bungkus',
            'type'        =>'',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Kg',
            'type'        => 'Berat',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Gram',
            'type'        => 'Berat',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Ons',
            'type'        => 'Berat',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Meter',
            'type'        => 'Panjang',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'CM',
            'type'        => 'Panjang',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Liter',
            'type'        => 'Volume',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Galon',
            'type'        => 'Volume',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'CC',
            'type'        => 'Volume',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Lusin',
            'type'        => '',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);
        array_push($data, [
            'title'       => 'Kodi',
            'type'        => '',
            'created_at'  => $this->randDate(),
            'updated_at'  => $this->randDate()
        ]);

        Ecs_measurement::insert($data);
    }
}
