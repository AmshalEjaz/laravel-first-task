<?php

namespace App\Http\Controllers;
use App\Http\PermissionMiddleware;
use App\Http\IsAdminMiddleware;
// use App\Models\Employee;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use SpatiePermissionMiddleware;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
//  public function __construct()
//     {   
//     $this->middleware('is_admin')->only(['create', 'store', 'edit', 'update', 'show', 'destroy']);
//     $this->middleware('isEmployee')->only(['edit', 'update', 'show']);
//     }
   public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $emp = User::with('company')->get();
        } else {
            $emp = User::where('id', $user->id)->with('company')->get();
        }

        $com = Company::all();
        $roles = Role::all();

        return view('employee.employee', compact('emp', 'com', 'roles'));
    }
  public function create()
    {
        $roles = Role::all();
        $com = Company::all();
        return view('employee.create',compact('com','roles'));
      
    }
    function show($id)
    {
    
        $employee=User::find($id);
        return view('employee.show',compact('employee'));
   
        
    }

  function store(Request $data): RedirectResponse
  {
    
    $validated = $data->validate([
        'name'=> 'required|unique:users|max:255',
        // 'lname' => 'required',
        'company_id' => 'required',
        'email' => 'required',
        'password' => 'required',
        'phone' => 'required',
        'role' => 'required',
    ]);
     $emp = new User();
    $emp->name = $validated['name'];
    // $emp->lname = $validated['lname'];
    $emp->company_id = $validated['company_id'];
    $emp->email = $validated['email'];
    $emp->password = $validated['password'];
    $emp->phone = $validated['phone'];
    
    $emp->assignRole($validated['role']);
    $emp->save();
    
    return redirect('employee')->with('success', 'Insert Data Successfully');
    
  }


public function destroy($id)
{
     
    $emp=User::find($id);
    $emp->delete();
    return redirect('employee')->with('success','record deleted');

}
public function edit($id)
{
    
    $emp = User::find($id);
    $com = Company::all(); 
    $roles = Role::all(); 
    return view('employee.edit', compact('emp', 'com','roles'));
    
}

function update(Request $data)
{

     
     $emp=User::find($data->input('id'));
     $emp->name=$data->input('name');
    //   $emp->lname=$data->input('lname');
     $emp->company_id=$data->input('company_id');
      $emp->email=$data->input('email');
      $emp->phone=$data->input('phone');

     $emp->syncRoles([$data->input('role')]);

      $emp->update();
     
      return redirect('/employee');
     
}

}
