<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

function randDate()
{
    return \Carbon\Carbon::now()
        ->subDays(rand(1, 100))
        ->subHours(rand(1, 23))
        ->subMinutes(rand(1, 60));
}
$factory->define(App\Models\Ecs_user::class, function (Faker\Generator $faker) {
    $createdAt = randDate();
    return [
        'username'              => $faker->username,
        'fullname'              => $faker->name,
        'email'                 => $faker->safeEmail,
        'password'              => app('hash')->make('admin'),
        'phone'                 => $faker->phoneNumber,
        'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'people'),23),
        'id_role'               => 4,
        'active'                => rand(0,1),
        'created_at'            => $createdAt,
        'updated_at'            => $createdAt
    ];
});
  
$factory->define(App\Models\Ecs_product::class, function (Faker\Generator $faker) {
    $userIds        = App\Models\Ecs_user::pluck('id')->toArray();
    $category       = App\Models\Ecs_category::pluck('id')->toArray();
    $store          = App\Models\Ecs_store::pluck('id')->toArray();
    $measurement    = App\Models\Ecs_measurement::pluck('id')->toArray();
    $createdAt      = randDate();

    return [
        'id_user'       => $faker->randomElement($userIds),
        'id_store'      => $faker->randomElement($store),
        'id_categories' => $faker->randomElement($category),
        'title_product' => $faker->sentence(10),
        'basic_price'   => rand(1000,10000),
        'market_price'  => rand(10000,100000),
        'selling_price' => rand(100000,1000000),
        'weight'        => rand(0,50),
        'description'   => $faker->text(1000),
        'id_measurement'=> $faker->randomElement($measurement),
        'status'        => rand(0,1),
        'created_at'    => randDate(),
        'updated_at'    => randDate(),
    ];
});  
$factory->define(App\Models\Ecs_category::class, function (Faker\Generator $faker) {
    return [
        'name'                  => $faker->name,
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_store::class, function (Faker\Generator $faker) {
    $userIds        = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_user'               => $faker->randomElement($userIds),
        'name_store'            => $faker->company,
        'courier'               => '["1","2","3"]',
        'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'cats'),23),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});

$factory->define(App\Models\Ecs_product_img::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    return [
        'id_product'            => $faker->randomElement($productId),
        'img_path'              => substr($faker->imageUrl($width = 640, $height = 480, 'technics'),23),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_product_extra::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $store            = App\Models\Ecs_store::pluck('id')->toArray();
    $browser          = ['40','41','42','43','44'];
    return [
        'id_product'            => $faker->randomElement($productId),
        'qty'                   => rand(0,99),
        'id_store'              => $faker->randomElement($store),
        'variation'             => $faker->colorName,
        'size'                  => array_random($browser),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_product_view::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $browser        = ['Windows 10','Linux','OSX'];
    return [
        'id_product'            => $faker->randomElement($productId),
        'ipaddress'             => $faker->ipv4,
        'browser'               => $faker->userAgent,
        'platform'              => array_random($browser),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_product_review::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_product'            => $faker->randomElement($productId),
        'id_user'               => $faker->randomElement($userIds),
        'rating'                => rand(0,5),
        'description'           => $faker->text,
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_product_comment::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_product'            => $faker->randomElement($productId),
        'id_user'               => $faker->randomElement($userIds),
        'content'               => $faker->text,
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_cart::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_product'            => $faker->randomElement($productId),
        'id_user'               => $faker->randomElement($userIds),
        'qty'                   => rand(1,5),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_store_address::class, function (Faker\Generator $faker) {
    $store            = App\Models\Ecs_store::pluck('id')->toArray();
    return [
        'id_store'              => $faker->randomElement($store),
        'province'              => $faker->cityPrefix,
        'city'                  => $faker->city,
        'subdistrict'           => $faker->state,
        'zip_code'              => $faker->postcode,
        'complete_address'      => $faker->address,
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_product_wishlist::class, function (Faker\Generator $faker) {
    $productId        = App\Models\Ecs_product::pluck('id')->toArray();
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_product'            => $faker->randomElement($productId),
        'id_user'               => $faker->randomElement($userIds),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_user_address::class, function (Faker\Generator $faker) {
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    return [
        'id_user'               => $faker->randomElement($userIds),
        'title_address'         => $faker->streetName,
        'name'                  => $faker->name,
        'phone'                 => $faker->e164PhoneNumber,
        'province'              => $faker->cityPrefix,
        'city'                  => $faker->city,
        'subdistrict'           => $faker->state,
        'zip_code'              => $faker->postcode,
        'complete_address'      => $faker->address,
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});
$factory->define(App\Models\Ecs_message::class, function (Faker\Generator $faker){
    $userIds          = App\Models\Ecs_user::pluck('id')->toArray();
    $store            = App\Models\Ecs_store::pluck('id')->toArray();
    $user             = ['member','store'];
    return [
        'id_user'               => $faker->randomElement($userIds),
        'id_store'              => $faker->randomElement($store),
        'content'               => $faker->text(100),
        'from'                  => array_random($user). $faker->randomElement($userIds),
        'created_at'            => randDate(),
        'updated_at'            => randDate()
    ];
});

