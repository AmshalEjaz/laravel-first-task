@extends('layout.frontend-master')

@section('body')
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="contact__form">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                    <p>{{session()->get('success')}}</p>

                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                    <p>{{session()->get('error')}}</p>

                    </div>
                    @endif
                        <form action="{{ url('employee/'. $emp->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                
                        <input type="hidden"  name="id" value="{{$emp->id}}">
                                
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name" name="name" value="{{$emp->name}}">
                                </div>
                                <!-- <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name" name="lname" value="{{$emp->lname}}">
                                </div> -->
                               
                                    
                               
                                 <div class="col-lg-6">
                                     <select name="company_id" class="form-control" required>
                                    @foreach($com as $company)
                                    <option value="{{ $company->id }}" {{ $emp->company_id == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                    </option>
                                    @endforeach
                                      </select>
                                    
                                    </div>
                                    @can('destroy employee')
                                <div class="col-lg-6">
                                <select name="role" class="form-control" required>
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}" @if($emp->roles->first()->name == $role->name) selected @endif>
                                    {{ ucfirst($role->name) }}
                                </option>
                            @endforeach
                        </select>
                                </div>
                                   @endcan

                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" value="{{$emp->email}}">
                                </div>
                                <!-- <div class="col-lg-6">
                                    <input type="password" placeholder="Password" name="password" value="{{$emp->password}}">
                                </div> -->
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone" name="phone" value="{{$emp->phone}}">
                                </div>
                                <div class="col-lg-">
                                   
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                       <div class="table-responsive">
  
</div>

                    </div>
                </div>
            </div>
        </div>
     </x-app-layout>
 @endsection