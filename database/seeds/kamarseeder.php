<?php

use Illuminate\Database\Seeder;
use App\Kamar;
class kamarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = kamar::create([
            'tipe_kamar' => 'deluxe',
            'jumlah_kamar' => '0',
        ]);
        $kamar = kamar::create([
            'tipe_kamar' => 'Superior',
            'jumlah_kamar' => '0',

        ]);

    }
}
