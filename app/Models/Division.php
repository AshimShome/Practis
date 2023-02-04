<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Upazila;
class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function district(){
        return $this->hasMany(District::class);
    }

    public function upazila(){
        return $this->hasManyThrough(Upazila::class,District::class);
    }

}
