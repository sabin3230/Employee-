@extends('employee.dashboard')
@section('content')

    <div class="container" style="margin-top: 90px" >
        <div class="row" >
            <div class="col-md-4">
                <div class="row" style="height: 700px">
                    <div class="col-12 bg-white p-0 px-3 py-3 mb-3">
                        <div class="d-flex flex-column align-items-center " >
                          @if(Auth::user()->image)
                            <img class="rounded-circle img-fluid mt-5" src="{{asset('images/'.Auth::user()->image)}}" alt="profile_image" style="width: 225px;height: 280px;">
                          @endif
                            <p class="fw-bold h4 mt-3"> {{ Auth::user()->name }}</p>
                            <p class="text-muted">{{ Auth::user()->department->name }}</p>
                            <p class="text-muted mb-3">{{ Auth::user()->address }}</p>
                            <div class="d-flex ">
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                                    Profile Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 ps-md-4">
                <div class="row" style="height: 700px">
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
                      <label for="inputEmail3" class="col-sm-2 col-form-label">DATE OF BIRTH</label>
                      <div class="col-sm-10">
                    {{ Auth::user()->dob }}
                      </div>  
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">

                <div class="container mt-2">
          
                <form action="{{ route('employee.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" value="{{ auth::user()->name }}" placeholder=" Enter Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="address" class="form-control" value="{{ auth::user()->address}}" placeholder=" Enter a Address">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contact Number:</strong>
                            <input type="text" name="contact" class="form-control" value="{{ auth::user()->contact}}" placeholder=" Enter Contact Number">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" value="{{auth::user()->email}}" placeholder=" Enter Email">
                        </div>
                    </div>              

                      <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Birth Date:</strong>
                                <input type="date" name="dob" class="form-control" value="{{ auth::user()->dob }}"placeholder="Enter Birth Date">
                            </div>
                        </div>
                    
                    <button type="submit" class="btn btn-primary ml-3 mt-3">Submit</button>
                </div>
               </form>
                  </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div> --}}
    </div>
  </div>
</div>
@endsection 