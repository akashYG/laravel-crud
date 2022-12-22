@extends('master')

@section('title')
    add course Page
@endsection

@section('header')
    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-white">Add Course Form</h1>
                    <div class="card card-body">
                        <p class="text-danger">{{Session::get('message')}}</p>

                        <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <level class="col-md-3">Course Name</level>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Course Description</level>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Course Fee</level>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="fee">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Course Image</level>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3"></level>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Apply Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

