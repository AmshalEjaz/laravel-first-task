@extends('layout.frontend-master')

@section('body')
 <section class="contact spad">
        <div class="container">
            <div class="row">
                
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

                <div class="col-lg-12 col-md-12">
                    <div class="contact__form">
                        <form action="{{ URL::to('insertData') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name" name="fname">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name" name="lname">
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">

                                 <select name="company_id" class="col-lg-6 form-control">
                            @foreach($com as $company)
                                <option value="{{ $company->id }}">
                                    {{ $company->name }}
                                </option>
                            @endforeach
                                    </select>

                                </div>

                                 


                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" placeholder="Phone" name="phone">
                                </div>
                                <div class="col-lg-6">
                                   
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                         <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
           @foreach($emp as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->fname }}</td>
                <td>{{ $item->lname }}</td>
                <td>{{ $item->company->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td><a href="{{ URL::to('delete/' . $item->id) }}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{ URL::to('updateEmployee/' . $item->id) }}" class="btn btn-primary">Update</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection