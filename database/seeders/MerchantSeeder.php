<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert([
            'name' => 'Jaya Abadi',
            'email' => 'jayaabadi@gmail.com',
            'phone_number' => '085645678921',
            'address' => 'Jalan Abadi No.1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('merchants')->insert([
            'name' => 'Abadi Jaya',
            'email' => 'abadijaya@gmail.com',
            'phone_number' => '085645678922',
            'address' => 'Jalan Abadi No.2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('merchants')->insert([
            'name' => 'ABC',
            'email' => 'abc@gmail.com',
            'phone_number' => '085664567894',
            'address' => 'Jalan ABC No. 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('merchants')->insert([
            'name' => 'Sentosa',
            'email' => 'sentosa@gmail.com',
            'phone_number' => '085698741235',
            'address' => 'Jalan Sentosa No.1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('merchants')->insert(
            [
                'name' => 'SukaMinum',
                'email' => 'sukaminum@gmail.com',
                'phone_number' => '085621347895',
                'address' => 'Jalan Suka Minum No.1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
    }
}
