<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function getEmployees() {
        return response()->json(Employee::all(), 200);
    }
    
}
