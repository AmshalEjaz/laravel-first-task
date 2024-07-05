<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{
       function employee()
  {
    $emp=Employee::with('company')->get();
       $com=Company::all();
      return view('employee',compact('emp','com'));
  }
  function insertData(Request $data)
  {
     $emp=new Employee();
     $emp->fname=$data->input('fname');
     $emp->lname=$data->input('lname');
     $emp->company_id=$data->input('company_id');
     $emp->email=$data->input('email');
     $emp->phone=$data->input('phone');
     $emp->save();
     return redirect()->back()->with('success','Insert Data Successfully');
  }


public function delete($id)
{
    $emp=Employee::find($id);
    $emp->delete();
    return redirect()->back()->with('success','record deleted');

}
public function edit($id)
{
    $emp = Employee::find($id);
    $com = Company::all(); 
    return view('updateEmployee', compact('emp', 'com'));
    return redirect()->back()->success('success','record updated');
}

function update(Request $data)
{
     $emp=Employee::find($data->input('id'));
     $emp->fname=$data->input('fname');
     $emp->lname=$data->input('lname');
     $emp->company_id=$data->input('company_id');
      $emp->email=$data->input('email');
      $emp->phone=$data->input('phone');
      $emp->update();
      return redirect('/employee');
}

}
