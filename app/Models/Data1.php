<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data1 extends Model
{
    use HasFactory;

    protected $table = "data_1";

    public function details()
    {
        return $this->hasMany(DataDetail1::class, "data_id");
    }
}
