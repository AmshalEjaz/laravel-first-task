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
                        <form action="{{ URL::to('insertData') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="file" placeholder="logo" name="logo">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="website" name="website">
                                </div>
                                <div class="col-lg-">
                                   
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                       <div class="table-responsive">
    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($com as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <img src="{{ URL::asset('uploads/'. $item->logo)}}" alt="Logo" class="img-thumbnail" style="max-width: 100px;">
                </td>
                <td>{{$item->website}}</td>
                <td><a href="{{URL::to('delete/'.$item->id)}}" class="btn btn-danger"> Delete</a></td>
                <td><a href="{{URL::to('update/'.$item->id)}}" class="btn btn-primary"> Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection