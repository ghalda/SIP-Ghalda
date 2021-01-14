<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $role = Role::all()->pluck('id')->toArray();
        foreach (range(1, 10) as $value) {

            DB::table('user')->insert([
                'name' => $faker->name,
                'role_id' => $faker->randomElement($role),
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
