<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $studentsData = Student::all();
        return response()->json($studentsData);
    }

    public function show($id)
    {
        $studentData = Student::where('idStudents', $id)->get();
        return $studentData;
    }

    public function create(Request $request)
    {
        Student::create($request->all());
        return response()->json($request);
    }

    public function delete($id)
    {
        Student::where('idStudents', $id)->delete();
        return response()->json($id . ' dihapus');
    }
}
