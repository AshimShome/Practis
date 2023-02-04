<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Upazila;

class Area extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee(){
        return $this->hasMany(Employee::class);
    }

    public function upazila(){
        return $this->belongsTo(Upazila::class);
    }

}
