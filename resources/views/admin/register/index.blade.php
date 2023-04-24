@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class=""><strong><em>Registration</em> List</strong></h3>

        <form action="" method="post" class="w-50 float-end">
            
           <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="search_std" id="" class="form-control mb-3" placeholder="Search Student">
                </div>
            </div>
            <div class="col-6 d-flex h-25">
                <button type="submit" class="btn btn-success me-2">Search</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
           </div>
        </form>

        <table class="table table-striped text-center">
            <thead class="bg-dark text-white">
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Program Title</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    <tr>
                        <td>{{ $students->firstItem() + $key }}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->program->title }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route('register_student.show', $student->id)}}" class="btn btn-warning me-2">View</a>
                            <form action="{{route('register_student.destroy',$student->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection