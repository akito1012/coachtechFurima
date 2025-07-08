<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'condition_id' => '1',
            'img' => 'image/Armani+Mens+Clock.jpg',
            'name' => '腕時計',
            'bland' => 'なしなし',
            'price' => 15000,
            'explanation' => 'スタイリッシュなデザインのメンズ腕時計',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '2',
            'img' => 'image/HDD+Hard+Disk.jpg',
            'name' => 'HDD',
            'bland' => 'なし',
            'price' => 5000,
            'explanation' => '高速で信頼性の高いハードディスク',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '3',
            'img' => 'image/iLoveIMG+d.jpg',
            'name' => '玉ねぎ三束',
            'bland' => 'なし',
            'price' => 300,
            'explanation' => '新鮮な玉ねぎ3束のセット',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '4',
            'img' => 'image/Leather+Shoes+Product+Photo.jpg',
            'name' => '革靴',
            'bland' => 'なし',
            'price' => 4000,
            'explanation' => 'クラッシックなデザインの革靴',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '1',
            'img' => 'image/Living+Room+Laptop.jpg',
            'name' => 'ノートPC',
            'bland' => 'なし',
            'price' => 45000,
            'explanation' => '高性能なノートパソコン',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '2',
            'img' => 'image/Music+Mic+4632231.jpg',
            'name' => 'マイク',
            'bland' => 'なし',
            'price' => 8000,
            'explanation' => '高音質のレコーディング用マイク',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '3',
            'img' => 'image/Purse+fashion+pocket.jpg',
            'name' => 'ショルダーバッッグ',
            'bland' => 'なし',
            'price' => 3500,
            'explanation' => 'おしゃれなショルダーバッグ',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '4',
            'img' => 'image/Tumbler+souvenir.jpg',
            'name' => 'タンブラー',
            'bland' => 'なし',
            'price' => 500,
            'explanation' => '使いやすいタンブラー',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '1',
            'img' => 'image/Waitress+with+Coffee+Grinder.jpg',
            'name' => 'コーヒーミル',
            'bland' => 'なし',
            'price' => 4000,
            'explanation' => '手動のコーヒーミル',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'condition_id' => '2',
            'img' => 'image/make_up_set.jpg',
            'name' => 'メイクセット',
            'bland' => 'なし',
            'price' => 2500,
            'explanation' => '便利なメイクアップセット',
        ];
        DB::table('items')->insert($param);
    }
}
