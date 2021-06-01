<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data0 extends Model
{
    use HasFactory;

    protected $table = "data_0";

    public function details()
    {
        return $this->hasMany(DataDetail0::class, "data_id");
    }
}
