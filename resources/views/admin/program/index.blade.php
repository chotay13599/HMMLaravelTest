@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class=""><strong><em>Program</em></strong></h3>

        <a href="{{ route('programs.create') }}" class="btn btn-success mb-3">New Program</a>

        <table class="table table-striped text-center">
            <thead class="bg-dark text-white">
                <th>No</th>
                <th>Program</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($programs as $key => $program)
                    <tr>
                        <td>{{ $programs->firstItem() + $key }}</td>
                        <td>{{ $program->title }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('programs.edit',$program->id) }}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{ route('programs.destroy',$program->id) }}" method="post">
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