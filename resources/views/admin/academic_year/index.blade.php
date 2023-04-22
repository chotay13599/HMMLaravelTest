@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class=""><strong><em>Academic</em></strong></h3>

        <a href="{{ route('academic.create') }}" class="btn btn-success mb-3">New Academic Year</a>

        <table class="table table-striped text-center">
            <thead class="bg-dark text-white">
                <th>No</th>
                <th>Academic Year</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($academics as $key => $academic)
                    <tr>
                        <td>{{ $academics->firstItem() + $key }}</td>
                        <td>{{ $academic->year }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('academic.edit',$academic->id) }}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{ route('academic.destroy',$academic->id) }}" method="post">
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