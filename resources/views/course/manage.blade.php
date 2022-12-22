
@extends('master')

@section('title')
    add course Page
@endsection

@section('header')
    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-white">All Course Information</h1>
                    <div class="card card-body">
                        <p class="text-danger">{{Session::get('message')}}</p>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl NO</th>
                                    <th>Name</th>
                                    <th>Course Fee</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->fee}}</td>
                                    <td>{{$course->description}}</td>
                                    <td><img src="{{asset($course->image)}}" alt="" height="50" width="70"></td>
                                    <td>
                                        <a href="{{route('course.edit',['id'=>$course->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                                        <a href="{{route('course.delete',['id'=>$course->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure Delete This') ">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

