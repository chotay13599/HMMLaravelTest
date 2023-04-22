@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('programs.index') }}" class="btn btn-dark mb-3">Back</a>

        <div class="card p-3 w-50 mx-auto">
            <div class="card-content">
                <form action="{{ route('programs.update',$program->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Program Title</label>
                        <input type="text" name="title" id="" class="form-control @error('title') border border-danger @enderror" placeholder="Enter Program Title" value="{{ $program->title }}">

                        @error('title')
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @enderror
                    </div>
        
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection