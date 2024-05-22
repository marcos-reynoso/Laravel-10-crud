<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function index(): View
    {
        return view('students.index', [
            'students' => Student::latest()->paginate(10)
        ]);
    }

    public function create(): View
    {
        return view('students.create');
    }
    public function store(StoreStudentRequest $request): RedirectResponse
    {
        Student::create($request->all());
        return redirect()->route('students.index')
            ->withSuccess('New students is added successfully.');
    }
    public function show(Student $student): View
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    public function edit(Student $student): View
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
}
