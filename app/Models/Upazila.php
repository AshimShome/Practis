<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\District;
use App\Models\Employee;
use App\Models\Union;

class Upazila extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function area(){
        return $this->hasMany(Area::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    } 

    public function employee(){
        return $this->hasManyThrough(Employee::class,Area::class);
    }

    public function union(){
        return $this->hasMany(Union::class);
    }

}
