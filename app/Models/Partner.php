<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'logo','service_id'];
    const PATH='images/partners/';
    
    function service(){
        return $this->belongsTo(Service::class);
    }

}
