<?php

use Illuminate\Database\Seeder;
use App\Fasilitas;
class fasilitasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fasilitas = fasilitas::create([
            'tipe_kamar' => 'deluxe',
            'nama_fasilitas' => 'Ac',
        ]);
        $fasilitas = fasilitas::create([
            'tipe_kamar' => 'Superior',
            'nama_fasilitas' => 'Ac',

        ]);

    }
}
