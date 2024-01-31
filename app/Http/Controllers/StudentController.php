<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // coba buat fitur search dalam model (query scope)
        // coba when
        // coba iiset
        // coba pakai ternary operator

        if (request()->has('keyword')) {
            $keyword = $request->input('keyword');
            $results = Student::where('idStudents', 'like', '%' . $keyword . '%')
                ->orWhere('FirstName', 'like', '%' . $keyword . '%')
                ->orWhere('LastName', 'like', '%' . $keyword . '%')
                ->orderBy('idStudents', 'ASC')
                ->paginate(2);
            // ->get();
        } else {
            $results = Student::orderBy('idStudents', 'ASC')
                ->paginate(2);
            // ->get();
        }
        return response()->json($results);
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

    public function delete($FirstName)
    {
        Student::where('FirstName', $FirstName)->delete();
        return response()->json($FirstName . ' dihapus');
    }

    public function update(Request $request, $id)
    {
        Student::where('idStudents', $id)->update($request->all());
        return response()->json('updated');
    }
}
