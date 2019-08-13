# Rest API Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## FEATURE

- Login, Logout, Register, Change password, Update Profile
- JWT-Auth - tymon/jwt-auth
- Dingo API - dingo/api
- vluzrmos/lumen-cors
- Flipbox/lumen-generator
- mailgun
## USAGE

- composer install
- cp .env.example .env
- vim .env
      DB_*          configuration your database
      JWT_SECRET    php artisan jwt:secret
      APP_KEY       key:generate is abandoned in lumen, 
                    please use md5(uniqid())，str_random(32) etc.，maybe use jwt:secret and copy it

- php artisan migrate
- php artisan db:seed
- php -S localhost:8000 -t ./public

© 2018 ProfileImage Studio 
<http://profileimage.studio/>

