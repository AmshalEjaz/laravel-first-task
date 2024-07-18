@extends('layout.frontend-master')

@section('body')
<div class="container">
            <div class="row justify-content-center">
                        <div class="col-md-8">
                           <div class="card">
                              <div class="card-header">
                                   <h3>Show student data</h3>
                                   <a href="{{ url('student') }}" class="btn btn-primary btn-sm float-end">Back</a>

                              </div>
                              <div class="card-body">
                              <lable>Student Name</lable>
                              <h4>{{$std->name}}</h4>
                              <hr/>
                              <lable>Section</lable>
                              <h4>{{$std->section}}</h4>
                              <hr/>
                              <lable>Student Course</lable>
                              <h4>{{$std->course}}</h4>
                              <hr/>
                              <lable>Email</lable>
                              <h4>{{$std->email}}</h4>
                              <hr/>
                              </div>
                           </div>
                        </div>
            </div>
</div>
@endsection