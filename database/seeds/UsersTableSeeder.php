<?php

use App\Models\Ecs_user;
use App\Models\Ecs_courier;
use App\Models\Ecs_site;
use App\Models\Ecs_site_bank;
use App\Models\Ecs_site_payment;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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
        factory(Ecs_user::class, 4)->create();
        $faker = Faker::create();
        $data = [];
        array_push($data, [
            'title'                 => 'jne',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'pos',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'tiki',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'rpx',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'esl',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'pcp',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'pandu',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'wahana',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'sicepat',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'j&t',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'pahala',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'cahaya',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'sap',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'jet',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'indah',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'slis',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'first',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'ncs',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'star',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'ninja',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'lion',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        array_push($data, [
            'title'                 => 'idl',
            'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'transport'),23),
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);        
        Ecs_courier::insert($data);
        
        $site = [];
        array_push($site, [
            'title_site'            => 'Nawarin',
            'desc'                  => 'Nawarin Alat Perang', 
            'phone'                 => '0845312121212',
            'email'                 => 'suka@nawarin.com',
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);    
        Ecs_site::insert($site);


        $bank = [];
        array_push($bank, [
            'title'                 => 'Bank BCA',
            'name'                  => 'BCA',
            'account_number'        => 12112121212,
            'status'                => 1,
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);    
        array_push($bank, [
            'title'                 => 'Bank ABC',
            'name'                  => 'ABC',
            'account_number'        => 212,
            'status'                => 1,
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]);
        Ecs_site_bank::insert($bank);

        $payment = [];
        array_push($payment, [
            'title_payment'         => 'Tranfer',
            'desc'                  => $faker->text() ,
            'id_bank'               => 1,
            'status'                => 1,
            'created_at'            => $this->randDate(),
            'updated_at'            => $this->randDate()
        ]); 
        // array_push($payment, [
        //     'title_payment'         => 'Tranfer',
        //     'desc'                  => $faker->text() ,
        //     'id_bank'               => 2,
        //     'status'                => 1,
        //     'created_at'            => $this->randDate(),
        //     'updated_at'            => $this->randDate()
        // ]);    
        // array_push($payment, [
        //     'title_payment'         => 'Indomart',
        //     'desc'                  => $faker->text() ,
        //     'status'                => 1,
        //     'created_at'            => $this->randDate(),
        //     'updated_at'            => $this->randDate()
        // ]);    
        // array_push($payment, [
        //     'title_payment'         => 'Transfer Virtual Account',
        //     'desc'                  => $faker->text(),
        //     'status'                => 1,
        //     'created_at'            => $this->randDate(),
        //     'updated_at'            => $this->randDate()
        // ]);    
        Ecs_site_payment::insert($payment);
    }
}
