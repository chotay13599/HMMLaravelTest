
@extends('layouts.app')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-md-4 ms-auto">
                    <a href="{{route('register_student.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <div class="card mx-5 col-md-6">
                <div class="card-title">
                    <h2 class="text-center">Student Information</h2>

                </div>
                <div class="card-body text-center ">
                    <div class="row ">
                        <div class="col-md-6">
    
                            <p>Name::{{$info->name}}</p> 
                            <p>Email::{{$info->email}}</p>
                            <p>Address::{{$info->address}}</p>
                            <p>Education::&nbsp;{{$info->education}}</p> 
                            <p>Experience::{{$info->experience}}</p>
                            <p>Uni Name::{{$info->uni_name}}</p>
                        </div>
    
                        <div class="col-md-6">
                            <p>Degree::&nbsp;{{$info->degree}}</p> 
                            <p>Gender::{{$info->gender}}</p>
                            <p>Country::{{$info->country}}</p>
                            <p>Year of Matriculation:: {{$info->year_of_matriculation}}</p>
                            <p>Experience Year::&nbsp;{{$info->experience_yr}}</p> 
                            {{-- <p>Uni Name::{{$info->uni_name}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </main>
@endsection



