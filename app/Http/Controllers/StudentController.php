<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(StoreStudentRequest $request): RedirectResponse
    {
        Student::create($request->all());
        return redirect()->route('students.index')
            ->withSuccess('New students is added successfully.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    public function update(UpdateStudentRequest $request, student $student): RedirectResponse
    {
        $student->update($request->all());
        return redirect()->back()
            ->withSuccess('studen is update succesfully .');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')
            ->withSuccess('Student is delete successfully .');
    }
    public function getAssists($id)
    {
        $student = Student::findOrFail($id);
        $cant = $student->assists()->count();
        $assists = $student->assists;
        return view('student.assists', [
            'student' => $student,
            'cant' => $cant,
            'assists' => $assists
        ]);
    }
}
