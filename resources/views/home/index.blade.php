@extends('master')

@section('title')
    About Page
@endsection

@section('header')
    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset($course->image)}}" alt="" height="250">
                        <div class="card-body">
                            <h4>{{$course->name}}</h4>
                            <h5>{{$course->description}}</h5>
                            <p>TK : {{$course->fee}}</p>
                            <hr/>
                            <a href="{{route('course.detail',['id'=>$course->id])}}" class="btn btn-outline-success px-5">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

