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

                         <!-- <div class="col-md-8"> -->
                          <div class="card">
                              <div class="card-header">
                                   <h3>Employee Personal Information</h3>
                                   <a href="{{ url('employee') }}" class="btn btn-primary btn-sm float-end">Back</a>

                              </div>
                              <div class="card-body">
                              <lable><b>Employee First Name</b></lable>
                              <h4>{{$employee->name}}</h4>
                              <hr/>
                              <!-- <lable><b>Employee Last Name</b></lable>
                              <h4>{{$employee->lname}}</h4>
                              <hr/> -->
                              <lable><b>Company Name</b></lable>
                              <h4>{{$employee->company->name}}</h4>
                              <hr/>
                              <lable><b>Email</b></lable>
                              <h4>{{$employee->email}}</h4>
                              <hr/>
                              <lable><b>Password</b></lable>
                              <h4>{{$employee->password}}</h4>
                              <hr/>
                              <lable><b>Phone</b></lable>
                              <h4>{{$employee->phone}}</h4>
                              <hr/>
                              </div>
                           <!-- </div> -->
                        </div>
                         </div>
                        </div>
                        </div>
</x-app-layout>

@endsection