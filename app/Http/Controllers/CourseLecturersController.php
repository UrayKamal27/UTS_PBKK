<?php

namespace App\Http\Controllers;

use App\Models\CourseLecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseLecturers;

class CourseLecturersController extends Controller
{
    public function index()
    {
        return CourseLecturers::with(['course', 'lecturer'])->get();
    }

    public function store(Request $request)
    {
        $data = CourseLecturers::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return CourseLecturers::with(['course', 'lecturer'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = CourseLecturers::findOrFail($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function destroy($id)
    {
        CourseLecturers::destroy($id);
        return response()->json(null, 204);
    }
}