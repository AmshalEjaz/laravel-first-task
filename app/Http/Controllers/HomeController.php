<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
  {
      $com=Company::all();
      return view('company',compact('com'));
  }
  function insertData(Request $data)
  {
   $com=new Company();
   $com->name=$data->input('name');
   $com->email=$data->input('email');
  if($data->file('logo')!=null)
      {
        $com->logo=$data->file('logo')->getClientOriginalName();
        $data->file('logo')->move('uploads/' ,$com->logo);
      }
   $com->website=$data->input('website');
   $com->save();
   return redirect()->back()->with('success', 'Record inserted successfully');

  }

  function delete($id)
  {
      $com=company::find($id);
      $com->delete();
      return redirect()->back()->with('success', 'Record deleted');
  }
  function update($id)
  {
      $com=company::find($id);
      return view('update',compact('com'));
      return redirect()->back()->with('success','Record updated');
  }
   public function updatecompany(Request $data)
  {
      
   $com=Company::find($data->input('id'));
   $com->name=$data->input('name');
   $com->email=$data->input('email');
  if($data->hasfile('logo'))
      {
        $com->logo=$data->file('logo')->getClientOriginalName();
        $data->file('logo')->move('uploads/' ,$com->logo);
      }
      $com->website=$data->input('website');
      $com->update();
      return redirect('/');
  }
}
