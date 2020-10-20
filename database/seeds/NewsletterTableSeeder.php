<?php

use Illuminate\Database\Seeder;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $num) {
            DB::table('newsletter')->insert([
                
                'title' => "サンプル {$num}",
                'preheader_text' => "サンプル配信を行います。",
                'delivery_date' => "2020/8/25",
                'status' => $num,
                'category' => "本会員",
            ]);
        }
    }
}
