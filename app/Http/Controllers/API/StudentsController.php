<?php

namespace App\Http\Controllers\API;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Students;

class StudentsController extends Controller
{
    public function index()
    {
        return Students::with('enrollments')->get();
    }

    public function store(Request $request)
    {
        $student = Students::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        return Students::with('enrollments')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $student = Students::findOrFail($id);
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy($id)
    {
        Students::destroy($id);
        return response()->json(null, 204);
    }
}