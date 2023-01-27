<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => env('APP_DEFAULT_USER'),
//            'permission_id' => '1',
            'email_verified_at' => now(),
            'password' => bcrypt(env('APP_DEFAULT_PASSWORD')),
            'remember_token' => Str::random(10),
        ]);

        $user->givePermissionTo('edit-products');

    }

}
