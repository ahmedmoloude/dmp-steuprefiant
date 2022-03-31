<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demande';


    protected $fillable = [
        "name",
        "client_id" ,
        "year",
        "nature_de_element" ,
        "data",
        "config"
    ];
    

}
