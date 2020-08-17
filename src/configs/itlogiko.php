<?php

use itLogiko\Laravel\Models\AdminModel;
use itLogiko\Laravel\Models\UserModel;

config(['auth.guards.admin' => ['driver' => 'session', 'provider' => 'admins']]);
config(['auth.guards.admin-api' => ['driver' => 'token', 'hash' => false, 'provider' => 'admins']]);
config(['auth.passwords.admins' => [
  'expire' => 60, 'provider' => 'admins', 'table' => 'password_resets', 'throttle' => 60,
]]);
config(['auth.providers.admins' => ['driver' => 'eloquent', 'model' => AdminModel::class]]);
config(['auth.providers.users.model' => UserModel::class]);

return [
  'db' => [
    'prefix' => env('ITLOGIKO_DB_PREFIX', 'itlogiko_'),
  ],
  'route' => [
    'name' => env('ITLOGIKO_ROUTE_NAME', 'itlogiko::'),
    'prefix' => env('ITLOGIKO_ROUTE_PREFIX', '/itlogiko'),
  ],
];
