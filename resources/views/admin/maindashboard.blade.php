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
    
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$users}}</span>
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
                                <a type="button" href={{route("employee.show", $id =$user->id )}} class="btn btn-primary "  >
                                    Details
                                </a>
                  </td>
                    @endforeach 

            </tbody>
        </table>
</div>




@endsection