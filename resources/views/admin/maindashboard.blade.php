@extends('main')
@section('content')


<div id="root">
  <div class="container pt-5">
    <div class="row align-items-stretch" style="margin : -20px -200px 0px 50px ">
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Department<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
             
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$department}}</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6 ml-5">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total  employee<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
    
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">€500</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Apply Leave<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$leave}}</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card" style="margin: 20px 0px 0px 75px; width: 595px" >
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employees</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

          @foreach ($user as $user)
                    <tr>
                      <td><img src="{{url('images/')}}/{{$user->image}}" alt="" width="100">{{ $user->name }}</td> 
        
                  <td>
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                                    Details
                                </button>
                  </td>
                    @endforeach 

            </tbody>
        </table>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                    <div class="col" style="padding: 0px 0px 0px 0px">
                        <div class="row" style="height: 550px">
                            <div class="col-12 bg-white px-3 mb-3 pb-3">
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
          
                  </div>
          </div>
</div>

@endsection