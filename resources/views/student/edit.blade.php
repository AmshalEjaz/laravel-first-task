@extends('layout.frontend-master')

@section('body')
 <section class="contact spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12">
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
                     <h3>Students</h3>
                       <a href="{{ url('student') }}" class="btn btn-primary btn-sm mb-3">Back</a>

                        <form action="{{ url('student/' .$student->id) }}" method="POST" >
                        @csrf
                       @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" value="{{$student->name}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Course" name="course" value="{{$student->course}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Section" name="section" value="{{$student->section}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" value="{{$student->email}}">
                                </div>
                                <div class="col-lg-">
                                   
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection