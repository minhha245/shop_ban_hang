<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'matp',
        'maqh',
        'maxa',
        'name_city',
        'name_qh',
        'name_xa',

    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_tinhthanhpho';
}
