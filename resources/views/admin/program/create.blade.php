@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('programs.index') }}" class="btn btn-dark mb-3">Back</a>

        <div class="card p-3 w-50 mx-auto">
            <div class="card-content">
                <form action="{{ route('programs.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Program Title</label>
                        <input type="text" name="title" id="" class="form-control @error('title') border border-danger @enderror" placeholder="Enter Program Title">

                        @error('title')
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @enderror
                    </div>
        
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection