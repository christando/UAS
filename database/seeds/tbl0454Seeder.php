<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class tbl0454Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<=4;$i++)
        {
            DB::table('tbl0454')->insert([
                'judul_artikel' => $faker->name(),
                'tanggal_artikel' => $faker->date(),
                'deskripsi_artikel' => $faker->text(10),
            ]);
        }

    }
}
