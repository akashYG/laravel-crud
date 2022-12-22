@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $s=1 @endphp
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>
                                <img src="{{asset('storage/'.$teacher->image)}}" style="height: 50px" width="60px" alt="">
                            </td>
                            <td>
                                <a href="{{route('teacher-edit',$teacher->id)}}" class="btn btn-primary" value="edit">Edit</a>
                                <a href="{{route('teacher-delete',$teacher->id)}}" class="btn btn-danger" value="delete" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
