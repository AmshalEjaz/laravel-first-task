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

                    <style>
                        .btn-sm {
                            width: 90px;
                            height: 38px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .masked-password {
                            -webkit-text-security: disc;
                            text-security: disc;
                        }

                        .table-wrapper {
                            max-height: 400px;
                            overflow-y: auto;
                        }
                    </style>

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <p>{{ session()->get('error') }}</p>
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

                    <div class="col-lg-12 col-md-12">
                        <div class="contact__form">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3></h3>
                                @can('create employee')
                                <a href="{{ url('employee/create') }}" class="btn btn-primary">Add Employee</a>
                                @endcan
                            </div>

                            <div class="table-wrapper">
                                <table class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Company Name</th>
                                           
                                            <th>Email</th>
                                            <th>Phone</th>
                                            @can('update employee')
                                            <th>Update</th>
                                            @endcan
                                            @can('destroy employee')
                                            <th>Delete</th>
                                            @endcan
                                            @can('show employee')
                                            <th>Show</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($emp as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->company ? $item->company->name : 'N/A' }}</td>
                                            
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            @can('update employee')
                                            <td>
                                                <a href="{{ url('employee/' . $item->id . '/edit') }}"
                                                    class="btn btn-primary">Update</a>
                                            </td>
                                            @endcan
                                            @can('destroy employee')
                                            <td>
                                                <form method="POST" action="{{ url('employee/' . $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            @endcan
                                            @can('show employee')
                                            <td>
                                                <a href="{{ url('employee/' . $item->id) }}"
                                                    class="btn btn-success">Show</a>
                                            </td>
                                            @endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
