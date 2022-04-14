<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableData extends Model
{
    use HasFactory;

    protected $table = 'table_data';

    protected $fillable = [
        "config" ,
        "data",
        "demande_id",
        "on_depend_id"
    ];
}
