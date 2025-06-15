<?php

namespace App\Http\Controllers\API;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lecturers;

class LecturersController extends Controller
{
    public function index()
    {
        return Lecturers::with('courseLecturers')->get();
    }

    public function store(Request $request)
    {
        $lecturer = Lecturers::create($request->all());
        return response()->json($lecturer, 201);
    }

    public function show($id)
    {
        return Lecturers::with('courseLecturers')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $lecturer = Lecturers::findOrFail($id);
        $lecturer->update($request->all());
        return response()->json($lecturer);
    }

    public function destroy($id)
    {
        Lecturers::destroy($id);
        return response()->json(null, 204);
    }
}