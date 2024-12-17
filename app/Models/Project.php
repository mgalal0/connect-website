<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'image' , 'service_id'];
     const PATH="images/projects/";
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
