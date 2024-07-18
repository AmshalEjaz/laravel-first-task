@extends('layout.frontend-master')

@section('body')
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Company') }}
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

                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                     
                       <a href="{{ url('employee') }}" class="btn btn-primary btn-sm mb-3">Back</a>
                        <form action="{{ url('employee') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name" name="name">
                                </div>
                                <!-- <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name" name="lname">
                                </div> -->
                                <div class="col-lg-6">
                                
                                 <select name="company_id" class="col-lg-6 form-control">
                            @foreach($com as $company)
                                <option value="{{ $company->id }}">
                                    {{ $company->name }}
                                </option>
                            @endforeach
                                </select>

                                
                                </div>
                                <div class="col-lg-6">
                                

                               <select name="role" class="col-lg-6 form-control">
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>


                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" placeholder="Phone" name="phone">
                                </div>
                                <div class="col-lg-6">
                                   
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection