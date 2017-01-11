<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{
    public function store(StudentStoreRequest $request)
    {
        $input = $request->only(['id', 'line_id', 'name', 'img', 'status']);
        return Student::create($input);
    }
}
