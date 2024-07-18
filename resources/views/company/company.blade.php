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

                    <style>
                        .btn-sm {
                            width: 90px;
                            height: 38px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                    </style>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3></h3>
                        @can('create company')
                            <a href="{{ url('company/create') }}" class="btn btn-primary float-end">Add Company</a>
                        @endcan   
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-5">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Logo</th>
                                    <th>Website</th>
                                    @can('destroy company')
                                        <th>Delete</th>
                                    @endcan
                                    @can('update company')
                                        <th>Update</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($com as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <img src="{{ URL::asset('storage/' . $item->logo) }}" alt="Logo" class="img-thumbnail" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $item->website }}</td>
                                        @can('destroy company')
                                            <td>
                                                <form method="POST" action="{{ url('company/' . $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        @endcan
                                        @can('update company')
                                            <td>
                                                <a href="{{ url('company/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">Update</a>
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
</x-app-layout>
@endsection
