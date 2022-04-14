<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demandes';

    protected $fillable = [
        "client_id" ,
        "name",
        "year",
        "data",
        "status"
    ];
    
    public function tables()
    {
        return $this->hasMany('App\Models\TableData' , 'demande_id' , 'id');
    }

}
