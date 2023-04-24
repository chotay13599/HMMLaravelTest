<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/register.css')}}" />
    <script src="{{url('assets/js/register.js')}}" defer></script>
    <title>Registraion Form</title>
  </head>
  <body>
    <form action="{{route('registerForm.store')}}" class="form"  method="post" enctype="mu">
      @csrf
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Personal Info"
        ></div>
        <div class="progress-step" data-title="Education"></div>
        <div class="progress-step" data-title="Working Experience"></div>
        <div class="progress-step" data-title="File Uploads"></div>
      </div>

      <!-- Steps -->
      {{-- First Step --}}
      <div class="form-step form-step-active ">
        {{-- Program & Academic --}}
        <div class="row mb-5">
          <div class="col-6">
            <label for="program" class="form-label">Program</label>
            <select name="program_id" id="" class="form-select">
              <option value="0" selected hidden> Choose Program</option>
              @foreach ($programs as $program)
                  <option value="{{$program->id}}">{{$program->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-6">
            <label for="program" class="form-label">Academic</label>
            <select name="academic_id" id="" class="form-select">
              <option value="0" selected hidden> Choose Academic Year</option>
              @foreach ($academics as $academic)
                  <option value="{{$academic->id}}">{{$academic->year}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group mb-4">
          <h3>Personal Infromation</h3>
          <div class="row">
            <div class="col-4">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" id="" class="form-control">
            </div>

            <div class="col-4">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" name="dob" id="" class="form-control">
            </div>

            <div class="col-4">
              <label for="nrc" class="form-label">Nrc</label>
              <input type="text" name="nrc" id="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group mb-4">
          <div class="row">
            <div class="col-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="" class="form-control">
            </div>

            <div class="col-4">
              <label for="phone" class="form-label">Phone(09*******)</label>
              <input type="text" name="phone" id="" class="form-control">
            </div>

            <div class="col-4">
              <label for="link" class="form-label">Facebook Link</label>
              <input type="text" name="link" id="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group mb-4">
          <div class="row">
            <div class="col-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" name="address" id="" class="form-control">
            </div>

            <div class="col-3">
              <label for="city" class="form-label">City</label>
              <input type="text" name="city" id="" class="form-control">
            </div>

            <div class="col-3">
              <label for="state" class="form-label">State or Division</label>
              <input type="text" name="state" id="" class="form-control">
            </div>

            <div class="col-3">
              <?php
              $countries=["mandalay","yangon","nay pyi daw","Bago"]
              ?>
              <label for="country" class="form-label">Country</label>
              <select name="country" id="" class="form-select">
                <option value="0" selected>Choose Country</option>
                @foreach ($countries as $country)
                    <option value="{{$country}}">{{$country}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-4">
            <label for="">Race</label>
            <div class="row">
                <div class="col-3">
                    <input type="radio" class="form-check" name="race"  value="myanmar" />
                </div>
                <div class="col-8">
                    <label for="race" class="form-label"> Myanmar</label>
                </div>
            </div>
            <div class="row ">
              <div class="col-3">
                  <input type="radio" class="form-check" name="race" value="other" />
              </div>
              <div class="col-8">
                  <label for="other" class="form-label"> other</label>
              </div>
            </div>
          </div>
          <div class="col-4">
            <label for="">Martial Status</label>
            <div class="row">
                <div class="col-3">
                    <input type="radio" class="form-check" name="martial_status"  value="married" />
                </div>
                <div class="col-8">
                    <label for="martial_status" class="form-label"> married</label>
                </div>
            </div>
            <div class="row">
              <div class="col-3">
                  <input type="radio" class="form-check" name="martial_status" value="single" />
              </div>
              <div class="col-8">
                  <label for="martial_status" class="form-label"> single</label>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                  <input type="radio" class="form-check" name="martial_status" value="other" />
              </div>
              <div class="col-8">
                  <label for="martial_status" class="form-label"> other</label>
              </div>
            </div>
          </div>
          <div class="col-4">
            <label for="">Gender</label>
            <div class="row">
                <div class="col-3">
                    <input type="radio" class="form-check" name="gender"  value="male" />
                </div>
                <div class="col-8">
                    <label for="martial_status" class="form-label"> Male</label>
                </div>
            </div>
            <div class="row">
              <div class="col-3">
                  <input type="radio" class="form-check" name="gender" value="female" />
              </div>
              <div class="col-8">
                  <label for="martial_status" class="form-label"> Female</label>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                  <input type="radio" class="form-check" name="gender" value="other" />
              </div>
              <div class="col-8">
                  <label for="martial_status" class="form-label"> other</label>
              </div>
            </div>
          </div>
        </div>

        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>

      {{-- Second Step --}}
      <div class="form-step">

        <div class="row mb-3">
          <h5>Highest Education</h5>
          <div class="col-md-6">
              <div class="row">
                <div class="col-1">
                  <input type="radio" name="education" id="" >
                </div>
                <div class="col-11">
                  <label for="education" >Matriculation</label>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <input type="radio" name="education" id="" >
                </div>
                <div class="col-11">
                  <label for="education" >IGCSE or GED</label>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <input type="radio" name="education" id="" >
                </div>
                <div class="col-11">
                  <label for="education" >Other</label>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-1">
                <input type="radio" name="education" id="" >
              </div>
              <div class="col-11">
                <label for="education" >Matriculation</label>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <input type="radio" name="education" id="" >
              </div>
              <div class="col-11">
                <label for="education" >IGCSE or GED</label>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <input type="radio" name="education" id="" >
              </div>
              <div class="col-11">
                <label for="education" >Other</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <h5>High School</h5>
          <div class="row">
            <div class="col-6">
              <label for="" class="form-label">High School Name</label>
              <input type="text" name="school_name" id="" class="form-control">
            </div>
            <div class="col-6">
                <label for="">Year of Matriculation Exam Pass</label>
                <input type="text" name="year_of_matriculation" id="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <h5>Degree or Diploma</h5>
          <div class="row">
            <div class="col-3">
              <label for="" class="form-label">Degree or Diploma</label>
              <input type="text" name="degree" id="" class="form-control">
            </div>
            <div class="col-3">
                <label for="">University Name</label>
                <input type="text" name="uni_name" id="" class="form-control">
            </div>
            <div class="col-3">
              <label for="">Start Date</label>
              <input type="date" name="uni_start_date" id="" class="form-control">
            </div>
            <div class="col-3">
              <label for="">End Date</label>
              <input type="date" name="uni_end_date" id="" class="form-control">
            </div>
          </div>
        </div>

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>

      {{-- Third Step --}}
      <div class="form-step">
        <div class="row mb-3">
          <div class="col-md-6">
            <h5>Do you have any Working Experience?</h5>
             <div class="row">
              <div class="col-3">
                <input type="radio" name="experience" id="" class="form-check">
              </div>
              <div class="col-9">
                 <label class="form-label">Yes</label>
              </div>
             </div>
             <div class="row">
              <div class="col-3">
                <input type="radio" name="experience" id="" class="form-check">
              </div>
              <div class="col-9">
                 <label class="form-label">No</label>
              </div>
             </div>

          </div>
          <div class="col-md-6">
            <h5>Working Experience</h5>
             <div class="row">
              <div class="col-3">
                <input type="radio" name="experience_yr" id="" class="form-check">
              </div>
              <div class="col-9">
                 <label class="form-label">between 1 & 3 yrs</label>
              </div>
             </div>
             <div class="row">
              <div class="col-3">
                <input type="radio" name="experience_yr" id="" class="form-check">
              </div>
              <div class="col-9">
                 <label class="form-label">between 3 & 5 yrs</label>
              </div>
             </div>
             <div class="row">
              <div class="col-3">
                <input type="radio" name="experience_yr" id="" class="form-check">
              </div>
              <div class="col-9">
                 <label class="form-label">above 5 yrs</label>
              </div>
             </div>

          </div>
        </div>

        <div class="form-group mb-3">
          <h5>Current Occupation</h5>
          <div class="row">
            <div class="col-4">
              <label for="" class="form-label">Position</label>
              <input type="text" name="cur_position" id="" class="form-control">
            </div>
            <div class="col-4">
              <label for="" class="form-label">Company Name</label>
              <input type="text" name="cur_company" id="" class="form-control">
            </div>
            <div class="col-4">
              <label for="" class="form-label">Starting Date</label>
              <input type="date" name="cur_start_date" id="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <h5>Previous Occupation</h5>
          <div class="row">
            <div class="col-3">
              <label for="" class="form-label">Position</label>
              <input type="text" name="pre_position" id="" class="form-control">
            </div>
            <div class="col-3">
              <label for="" class="form-label">Company Name</label>
              <input type="text" name="pre_company" id="" class="form-control">
            </div>
            <div class="col-3">
              <label for="" class="form-label">Start Date</label>
              <input type="date" name="pre_start_date" id="" class="form-control">
            </div>
            <div class="col-3">
              <label for="" class="form-label">End Date</label>
              <input type="date" name="pre_end_date" id="" class="form-control">
            </div>
          </div>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>

      {{-- Fourth Step --}}
      <div class="form-step">
         <div class="form-group mb-3">
          <h5>To upload Documents</h5>
          <div class="row">
            <div class="col-4">
              <label for="" class="form-label">NRC Front & Back</label>
              <input type="file" name="nrc_img" id="">
            </div>
            <div class="col-4">
              <label for="" class="form-label">Graduation Certificate</label>
              <input type="file" name="graduate_img" id="">
            </div>
            <div class="col-4">
              <label for="" class="form-label">Other Documents</label>
              <input type="file" name="other_img" id="">
            </div>
          
            
          </div>
         </div>

         <div class="row mb-3">
            <div class="col-12">
              <label for="" class="form-label">Description</label>
              <Textarea name="description" class="form-control" style="height: 100px"></Textarea>
            </div> 
         </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
      </div>
    </form>
  </body>
</html>