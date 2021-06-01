<?php

namespace App\Http\Controllers;

use App\Models\Data0;
use App\Models\Data1;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = $this->mappingData();

        return view('home', compact('data'));
    }

    private function mappingData()
    {


        $data1s = Data1::withCount('details')->get();

        $totalRow = $data1s->count();

        foreach ($data1s as $data1) {
            $totalRow += $data1->details_count;
        }

        $tableData = [];



        // Define all rows in table
        for ($i = 0; $i < $totalRow; $i++) {
            $tableData[] = [
                '', '', '', ''
            ];
        }

        // Get data from model
        $data0 = Data0::with(['details'])->get();
        $data1 = Data1::with(['details'])->withCount('details')->get();

        // Mapping data into table
        $lastRow = 0;
        for ($i = 0; $i < $data1->count(); $i++) {


            // Fill Header
            $tableData[$lastRow][0] = $data0[$i]->uraian;
            $tableData[$lastRow][1] = $data0[$i]->jumlah;
            $tableData[$lastRow][2] = $data1[$i]->uraian;
            $tableData[$lastRow][3] = $data1[$i]->jumlah;


            // Fill Details 0
            $lastRow0 = $lastRow + 1;
            foreach ($data0[$i]->details as $detail) {
                $tableData[$lastRow0][0] = $detail->uraian;
                $tableData[$lastRow0][1] = $detail->jumlah;
                $lastRow0++;
            }



            // Fill Details 1
            $lastRow1 = $lastRow + 1;
            foreach ($data1[$i]->details as $detail) {
                $tableData[$lastRow1][2] = $detail->uraian;
                $tableData[$lastRow1][3] = $detail->jumlah;
                $lastRow1++;
            }



            $lastRow = $lastRow + 1 + $data1[$i]->details_count;
        }

        // echo json_encode($tableData);
        // die();

        return $tableData;
    }
}
