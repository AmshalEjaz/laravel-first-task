@extends('layout.frontend-master')

@section('body')
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Student Crud</h3>
        <a href="{{ url('student/create') }}" class="btn btn-primary btn-sm">Add Student</a>
    </div>
     <div class="table-responsive">
    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Course</th>
                <th>Section</th>
                <th>Email</th>
                <th>Show</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->course}}</td>
                <td>{{$item->section}}</td>
                <td>{{$item->email}}</td>
                
                <td><a href="{{url('student/'. $item->id)}}" class="btn btn-primary"> Show</a></td>
               <td>
               <form method="POST" action="{{url('student/'. $item->id)}}">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Delete</button>
               </form>
               </td>
               
               
                <td><a href="{{url('student/'. $item->id. '/edit')}}" class="btn btn-success"> Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
 </div>
 
 
 </div>
 </div>
@endsection