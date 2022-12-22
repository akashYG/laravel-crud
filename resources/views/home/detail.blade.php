@extends('master')

@section('title')
    Detail Page
@endsection

@section('header')
    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset($course->image)}}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$course->name}}</h1>
                        <h4>TK : {{$course->fee}}</h4>
                        <p>{{$course->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

