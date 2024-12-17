<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Service extends Model
{
    use HasFactory;
    protected $fillable =['name' , 'description' , 'image'];
    const PATH="images/services/";
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
