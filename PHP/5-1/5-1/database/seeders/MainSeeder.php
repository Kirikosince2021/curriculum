<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'user_id' => '宇宙人',
            'body' => '転職したい...',
            'created_at' => '2020-01-01 00:00:00',
            'updated_at' => '2020-01-01 00:00:00',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '犬',
            'body' => '休みたい...',
            'created_at' => '2020-01-01 00:00:00',
            'updated_at' => '2020-01-01 00:00:00',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '掃除機',
            'body' => '帰省したい...',
            'created_at' => '2020-01-01 00:00:00',
            'updated_at' => '2020-01-01 00:00:00',
        ];
        DB::table('posts')->insert($param);
    }
}
