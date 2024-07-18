<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::all();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated =$request->validate([
        'name' => 'required|unique:students|max:255',
        'course' => 'required',
        'section' => 'required',
        'email' => 'required|email',
        ]);
        
        $std=new Student();
        $std->name =$validated['name'];
        $std->course =$validated['course'];
        $std->section =$validated['section'];
        $std->email =$validated['email'];
        $std->save();
        return redirect('student')->with('success','Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $std=Student::find($id);
        return view('student.show',compact('std'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $std=Student::find($id);
        $std->name =$request->input('name');
        $std->course =$request->input('course');
        $std->section =$request->input('section');
        $std->email =$request->input('email');
        $std->update();
        return redirect('student')->with('success','Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('student')->with('success','data deleted successfully');
    }
}
