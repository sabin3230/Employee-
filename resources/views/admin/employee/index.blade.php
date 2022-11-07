@extends('main')
@section('title')
 Employee
@endsection
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Employee</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('employee.create') }}"> Create Employee</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Department</th>
                    <th>Join Date</th>
                    <th>Birth Date</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><img src="{{url('images/')}}/{{$user->image}}" alt="" width="100"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->contact }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->department->name }}</td>
                        <td>{{ $user->join_date }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->role }}</td>
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
                    @endforeach
            </tbody>
        </table>

    </div>

@endsection
