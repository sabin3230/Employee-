@extends('employee.dashboard')
@section('content')


    <h3>My Leave</h3>


     <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
         Apply Leave
     </button>
 



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Apply Leave</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="{{ route('leave.store') }}" method="post" class="" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="leave_from">Leave_from</label>
                    <input type="date" name="from" class="form-control">
                </div>

                <div class="form-group">
                    <label for="leave_to">Leave_to</label>
                    <input type="date" name="to"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="reason">Reason</label>
                    <input type="text" name="reason"  class="form-control " style="height: 100px">
                </div>
        </form>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="container mt-2">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Leave_From</th>
                    <th>Leave_To</th>
                    <th>Reason</th>
                    <th width="280px">Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->contact }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->department->name }}</td>
                        <td>{{ $user->join_date }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->is_admin }}</td>
                        <td>{{ $user->is_active }}</td>

                        <td>
                            <form action="{{ route('employee.destroy',$user->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('employee.edit',$user->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach --}}
            </tbody>
        </table>

    </div>



@endsection