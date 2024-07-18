<?php

namespace App\Http\Controllers;
use App\Http\PermissionMiddleware;
use App\Http\IsAdminMiddleware;
use App\Models\Company;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Http\RedirectResponse;
use SpatiePermissionMiddleware;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    // public function __construct()
    // {
        
    //     $this->middleware('is_admin:access company')->only(['index']);
    //     $this->middleware('is_admin:create company')->only(['create', 'store']);
    //     $this->middleware('is_admin:update company')->only(['edit', 'update']);
    //     $this->middleware('is_admin:show company')->only('show');
    //     $this->middleware('is_admin:destroy company')->only('destroy');
    // }

    function index()
  {
      $com=Company::all();
      return view('company.company', compact('com'));
  }

    public function create()
    {
        return view('company.create');
        
    }

  function store(Request $request): RedirectResponse
  {
    $validated = $request->validate([
        'name' => 'required|unique:companies|max:255',
        'email' => 'required',
        'logo' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        'website' => 'required|url',
    ]);
    $com = new Company();
    $com->name = $validated['name'];
    $com->email = $validated['email'];
  if ($request->file('logo') != null) {
        $file = $request->file('logo');
        $path = $file->store('uploads', 'public'); 
        $com->logo = $path; 
    }
    $com->website = $validated['website'];
  
    $com->save();
   return redirect('company')->with('success', 'Record inserted successfully');
 
  }

  function destroy(string $id)
  {
      
      $com=company::findOrFail($id);
      if($com->employee()->count() > 0)
      {
      return redirect('company')->with('error', 'Company does not deleted because Employee already exits.');
      }
      //delete the image into storage/app/public/uploads folder
      if ($com->logo) {
        Storage::disk('public')->delete($com->logo);
    }
       $com->delete();
      return redirect('company')->with('success', 'Company deleted ');
     
  }
  function edit($id)
  {
   
      $company=company::findOrFail($id);
      return view('company.edit',compact('company'));
     
  }
   public function update(Request $data)
  {
      
   $com=Company::find($data->input('id'));
   $com->name=$data->input('name');
   $com->email=$data->input('email');
   
  if ($data->file('logo') != null) {
        $file = $data->file('logo');
        $path = $file->store('uploads', 'public'); 
        $com->logo = $path; 
    }
      $com->website=$data->input('website');
      $com->update();
      return redirect('/company');
      
  }
}
