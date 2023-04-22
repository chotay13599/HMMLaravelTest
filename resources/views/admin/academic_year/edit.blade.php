@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('academic.index') }}" class="btn btn-dark mb-3">Back</a>

        <div class="card p-3 w-50 mx-auto">
            <div class="card-content">
                <form action="{{ route('academic.update',$year->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Academic Year</label>
                        <input type="text" name="year" id="" class="form-control @error('year') border border-danger @enderror" placeholder="Enter academic year" value="{{ $year->year }}">

                        @error('year')
                            <small class="text-danger">{{ $errors->first('year') }}</small>
                        @enderror
                    </div>
        
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection