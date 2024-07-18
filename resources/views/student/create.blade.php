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

                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                     <h3>Students</h3>
                       <a href="{{ url('student') }}" class="btn btn-primary btn-sm">Back</a>
                        <form action="{{url('student')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Course" name="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Section" name="section">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email">
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