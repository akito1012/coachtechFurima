<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => '1',
            'profile_img' => 'プロフィール画像',
            'post_code' => '000-0000',
            'address' => '市区町村',
            'building' => '建物名',
        ]);
    }
}
