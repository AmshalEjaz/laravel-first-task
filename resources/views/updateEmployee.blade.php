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
                        <form action="{{ URL::to('update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                
                        <input type="hidden"  name="id" value="{{$emp->id}}">
                                
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name" name="fname" value="{{$emp->fname}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name" name="lname" value="{{$emp->lname}}">
                                </div>
                               
                                    
                               
                                 <div class="col-lg-6">
                                     <select name="company_id" class="form-control" required>
                                    @foreach($com as $company)
                                    <option value="{{ $company->id }}" {{ $emp->company_id == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                    </option>
                                    @endforeach
                                      </select>
                                    
                                    </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" value="{{$emp->email}}">
                                </div>
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
    </section>
 @endsection