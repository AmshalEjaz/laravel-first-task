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
                        <form action="{{ URL::to('updatecompany') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                
                                    <input type="hidden"  name="id" value="{{$com->id}}">
                                
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" value="{{$com->name}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" value="{{$com->email}}">
                                </div>
                                 <div class="col-lg-6">
                                    <input type="file" placeholder="logo" name="logo">
                                    
                                    </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="website" name="website" value="{{$com->website}}">
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
    </section>
 @endsection