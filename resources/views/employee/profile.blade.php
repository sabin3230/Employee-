@extends('employee.dashboard')
@section('content')

    <div class="container" style="margin-top: 30px" >
        <div class="row" >
            <div class="col-md-4">
                <div class="row" style="height: 550px">
                    <div class="col-12 bg-white p-0 px-3 py-3 mb-3">
                        <div class="d-flex flex-column align-items-center " >
                          @if(Auth::user()->image)
                            <img class="rounded-circle img-fluid mt-5" src="{{asset('images/'.Auth::user()->image)}}" alt="profile_image" style="width: 220px;height: 200px;">
                          @endif
                            <p class="fw-bold h4 mt-3"> {{ Auth::user()->name }}</p>
                            <p class="text-muted">{{ Auth::user()->department->name }}</p>
                            <p class="text-muted mb-3">{{ Auth::user()->address }}</p>
                            <div class="d-flex ">
                                <a type="button" href={{route("user.show", Auth::user()->id)}} class="btn btn-primary "  >
                                    Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 ps-md-4">
                <div class="row" style="height: 550px">
                    <div class="col-12 bg-white px-3 mb-3 pb-3">
                        <div class="row tex-center mt-5">
                            <div class="col md-5 ">
                                <h1>Profile Details</h1>
                            </div>
                        </div>

                        <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">NAME</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->name }}
                      </div>  
                    </div>

                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">ADDRESS</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->address }}
                      </div>  
                    </div>

                    
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">CONTACT</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->contact }}
                      </div>  
                    </div>

                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->email }}
                      </div>  
                    </div>


                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Join Date</label>
                      <div class="col-sm-10">
                      {{ Auth::user()->join_date }}
                    </div>  

                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Birth</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->dob }}
                      </div>  
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection 