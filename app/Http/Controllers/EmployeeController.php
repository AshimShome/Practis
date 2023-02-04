<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Upazila;  
use App\Models\Division;
use App\Models\Union;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // public function index()
    // {
     
    //     $employees = Employee::with('area.upazila.district.division')->get();

    //     return view('employees.index', compact('employees'));
    // }
    // public function ckHasoneThrow(){
    //   $upazila=Upazila::with('area.employee')->get();

    //   return $upazila;
        
    // }
    // public function divishionWithUpujela(){
    //     // $division=Division::with('upazila')->get();
    //     $division=Division::with('district.upazila')->get();
    //    return $division;
    // }


public function index()  
    {
     
        $division = Division::with('district.upazila.union')->get();

        return $division;
    }
}
