<?php

namespace Database\Seeders;

use App\Models\Data0;
use App\Models\Data1;
use App\Models\DataDetail0;
use App\Models\DataDetail1;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data0Length = [3, 5, 2];
        $data1Length = [4, 5, 4];

        for ($i = 0; $i < 3; $i++) {
            $no = $i + 1;



            $data0 = Data0::create([
                'uraian' => "Data$no",
                'jumlah' => $data0Length[$i] * 10000
            ]);

            for ($j = 0; $j < $data0Length[$i]; $j++) {
                $detail = DataDetail0::create([
                    'uraian' => "Data_detail_$no.$j",
                    'jumlah' => 10000
                ]);

                $data0->details()->save($detail);
            }

            $data1 = Data1::create([
                'uraian' => "Data$no",
                'jumlah' => $data1Length[$i] * 10000
            ]);

            for ($j = 0; $j < $data1Length[$i]; $j++) {
                $detail = DataDetail1::create([
                    'uraian' => "Data_detail_$no.$j",
                    'jumlah' => 10000
                ]);

                $data1->details()->save($detail);
            }
        }
    }
}
